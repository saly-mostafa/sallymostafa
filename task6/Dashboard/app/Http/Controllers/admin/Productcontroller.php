<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class Productcontroller extends Controller
{
    public function index(){
        // $products= DB:: table('products') ->select('*') ->get();
        $products = DB::table('products')
            ->leftjoin('brands', 'brands.id', '=', 'products.brand_id')
            ->leftjoin('subcategories', 'subcategories.id', '=', 'products.subcategory_id')
            ->select('products.*', 'brands.name_en AS brand_name_en',
            'brands.name_ar AS brand_name_ar',
             'subcategories.name_en AS subcategory_name_en' ,
             'subcategories.name_ar AS subcategory_name_ar' )
            ->get();


    return view('admin.products.index' , compact('products'));
    }

    public function create(){
        $brands=DB::table('brands') ->select('id','name_en','name_ar')
        ->get();
        $subcategories=DB::table('subcategories') ->select('id','name_en','name_ar')
        ->get();

        return view('admin.products.create', compact('brands','subcategories'));
        }

        public function edit($id){
        $brands=DB::table('brands') ->select('id','name_en','name_ar')
        ->get();
        $subcategories=DB::table('subcategories') ->select('id','name_en','name_ar')
        ->get();
        $product=DB::table('products') ->where('id',$id) 
        ->first() ;

        return view('admin.products.edit' , compact('brands','subcategories','product'));
            }

    public function store(Request $request){
        $request->validate ([
            'name_en'=>[ 'required','string', 'min:2', 'max:512'],
            'name_ar'=>[ 'required','string', 'min:2', 'max:512'],
            'code'=>[ 'required','integer', 'digits:5','unique:products'],
            'price'=>[ 'required','numeric', 'between:1,999999.99'],
            'quantity'=>[ 'nullable','integer', 'min:1', 'max:200'],
            'status'=>[ 'nullable','integer','in:0,1'],
            'details_en'=>[ 'required','string'],
            'details_ar'=>[ 'required','string'],
            'subcategory_id'=>[ 'required','integer', 'exists:subcategories,id'],
            'brand_id'=>[ 'nullable','integer', 'exists:brands,id'],
            'image'=>[ 'required','mimes:png,jpg,jpeg','max:1000']
          ]);

          $filename= $request->file('image') ->hashname() ;
          $request->file('image') ->move(public_path('dist\img\products'),$filename);

          $data=$request ->except('_token,image');
          $data['image']= $filename;

          DB::table('products') ->insert($data);
          return redirect() ->Route('dashboard.products.index') ->with('success','THE  PRODUCT  CREATED  SUCCESSFULLY');

        }

     public function update(Request $request , $id){
        $request->validate ([
            'name_en'=>[ 'required','string', 'min:2', 'max:512'],
            'name_ar'=>[ 'required','string', 'min:2', 'max:512'],
            'code'=>[ 'required','integer', 'digits:5',"unique:products,code,{$id},id"],
            'price'=>[ 'required','numeric', 'between:1,999999.99'],
            'quantity'=>[ 'required','integer', 'min:1', 'max:200'],
            'status'=>[ 'required','integer','in:0,1'],
            'details_en'=>[ 'required','string'],
            'details_ar'=>[ 'required','string'],
            'subcategory_id'=>[ 'required','integer', 'exists:subcategories,id'],
            'brand_id'=>[ 'nullable','integer', 'exists:brands,id'],
            'image'=>[ 'nullable','mimes:png,jpg,jpeg','max:1000']
          ]);

          $data= $request->except('_token','image');

          if ($request->hasfile('image')){
              $filename= $request->file('image') ->hashname() ;
              $request->file('image') ->move(public_path('dist\img\products'),$filename);
             
            $oldimage= DB::table('products') ->select('image') ->where('id',$id)->pluck('image')->first()  ;
             
             if(file_exists (public_path('dist\img\products\\'. $oldimage ))){
                 unlink('dist\img\products\\'. $oldimage );
             }
             $data['image'] =$filename;
        } 
        DB::table('products') ->where('id',$id) ->update($data);
        return redirect() ->Route('dashboard.products.index') ->with('success','THE  PRODUCT  UPDATED  SUCCESSFULLY');
    }

    public function destroy($id){
        $oldimage= DB::table('products') ->select('image') ->where('id',$id)->pluck('image')->first();
             
        if(file_exists (public_path('dist\img\products\\'. $oldimage ))){
            unlink(public_path('dist\img\products\\'. $oldimage ));
        }
        DB::table('products') ->where('id',$id) ->delete();
        return redirect() ->back() ->with( 'success','THE  PRODUCT  DELETED  SUCCESSFULLY');

    }



}
