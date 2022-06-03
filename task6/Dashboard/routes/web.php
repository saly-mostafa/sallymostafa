<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\Productcontroller;
use App\Http\Controllers\admin\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('dashboard',[Dashboardcontroller::class,'index']) ->name('dashboard') ;
// Route::get('dashboard/products',[Productcontroller::class,'index']) ->name('dashboard.products');
// Route::get( 'dashboard/products/create', [Productcontroller::class,'create']) ->name('dashboard.products.create');
// Route::post( 'dashboard/products/store', [Productcontroller::class,'store']) ->name('dashboard.products.store');
// Route::get( 'dashboard/products/edit/{id}', [Productcontroller::class,'edit']) ->name('dashboard.products.edit');
// Route::post( 'dashboard/products/update', [Productcontroller::class,'update']) ->name('dashboard.products.update');




Route::get('/', function () {
    return view('welcome');
});
Route::prefix('dashboard') ->middleware('verified') ->name('dashboard') ->group( function() {
   Route::get('/',[Dashboardcontroller::class,'index'])  ;

Route::prefix('products') ->name('.products.') ->controller(productcontroller::class) ->group(function(){ 
   Route::get('/','index') ->name('index');
   Route::get( '/create', 'create') ->name('create');
   Route::post( '/store', 'store') ->name('store');
   Route::get( '/edit/{id}','edit') ->name('edit');
   Route::post( '/update/{id}','update') ->name('update');
   Route::post( '/destroy/{id}','destroy') ->name('destroy');
} );

} );
Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

