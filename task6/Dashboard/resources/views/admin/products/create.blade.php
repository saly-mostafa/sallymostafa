@extends('admin.layouts.app')

@section('title', 'CREAT PRODUCT')

@section('content')    
<div class="col-12">
        <!-- general form elements -->
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">PRODUCT INFORMATION</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

        <form method="post" action="{{ Route('dashboard.products.store') }}" enctype="multipart/form-data" >
            @csrf
            <div class="card-body">
              <div class="form-row">
                  <div class="col-6">
                    <label for="name_en">product name(en)</label>
                    <input type="text" class="form-control" name="name_en"  id="name_en" value="{{ old('name_en') }}" >
                  </div>
                  <div class="col-6">
                    <label for="name_ar">product name(ar)</label>
                    <input type="text" class="form-control" name="name_ar"  id="name_ar"  value="{{ old('name_ar') }}" >
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-3">
                      <label for="code">code</label>
                      <input type="number" class="form-control" name="code"  id="code"  value="{{ old('code') }}" >
                    </div>
                    <div class="col-3">
                      <label for="price">price</label>
                      <input type="number" class="form-control" name="price"  id="price"  value="{{ old('price') }}" >
                    </div>
                    <div class="col-3">
                        <label for="quantity">quantity</label>
                        <input type="number" class="form-control" name="quantity"  id="quantity"  value="{{ old('quantity')}}" >
                      </div>
                    </div>
                    <div class="form-row">
                        <div class="col-3">
                          <label for="status">status</label>
                        <select class="form-control" name="status" id="status" >
                        <option  @selected(old('status')==1)   value="1">ACTIVE</option>
                        <option  @selected(old('status')==0)  value="0">NO ACTIVE</option>
                    </select>
                        </div>

                        <div class="col-3">
                          <label for="brand_id">brand</label>
                           <select class="form-control" name="brand_id" id="brand_id" >
                            <option value=""> NO BRAND</option>
                            @foreach($brands as $brand)
                            <option  @selected(old('brand_id')==$brand->id)  value=" {{ $brand->id }}"> {{ $brand->name_en }} / {{ $brand->name_ar }} </option>
                            @endforeach
                          </select>
                      </div>
                      <div class="col-3">
                        <label for="subcategory_id">sub category</label>
                         <select class="form-control" name="subcategory_id" id="subcategory_id" >
                          @foreach($subcategories as $subcategory)
                          <option   @selected(old('subcategoryid')==$subcategory->id)  value=" {{ $subcategory->id }}"> {{ $subcategory->name_en }} / {{ $subcategory->name_ar }} </option>
                          @endforeach
                         </select>
                    </div>
                        
                    <div class="form-row">
                        <div class="col-6">
                          <label for="details_en">details(en)</label>
                          <textarea class="form-control" name="details_en"  id="details_en" cols="30" rows="10" >
                            {{ old('details_en') }}
                          </textarea>
                        </div>
                        <div class="col-6">
                          <label for="details_ar">details(ar)</label>
                          <textarea  class="form-control" name="details_ar"  id="details_ar" cols="30" rows="10">
                            {{ old('details_ar') }}
                          </textarea>
                        </div>

                    <div class="form-row">
                        <div class="col-4">
                            <label for="file">
                                <img src="{{ asset('dist/img/upload.png')}}"  id="image"  alt="upload" class="w-100" style="cursor: pointer"  >
                            </label>
                            <input type="file" class="d-none" name="image"  id="file"  onchange="loadImage(event)" >
                          </div>
                      </div>
                    </div>
                    </div>

            <!-- /.card-body --> 

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">CREATE</button>
            </div>
          </form>
        </div>
</div>
@endsection

@section('js')
<script>
    var loadImage = function(event) {
        var output = document.getElementById('image');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>  
@endsection
