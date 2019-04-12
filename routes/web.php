<?php
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
Route::get('/', 'IndexController@index');
//UsersController
Route::post('/user/mail', 'UsersController@mail');//Envia el mail de registro
//SaintController
Route::post('/update/saint', 'SaintController@update');//Actualiza los precios con la base de datos del saint
//Route::group admin
Route::middleware(['auth', 'role'])->group(function(){
  //UsersController
  Route::get('/gr8p0pl85', 'UsersController@index');
  Route::get('/delete/user/{id}', 'UsersController@destroy');
  Route::get('/user/{id}', 'UsersController@show');
  Route::get('/edit/user/{id}', 'UsersController@edit');
  Route::post('/update/user/{id}', 'UsersController@update');
  Route::post('/search/users/admin', 'UsersController@search');
  Route::post('/searchForRif', 'UsersController@searchForRif');
  //ProductController
  Route::post('/search/product/admin','ProductController@search');
  Route::get('/products', 'ProductController@index');
  Route::get('/edit/product/{id}', 'ProductController@edit');
  Route::post('/product/update/{id}', 'ProductController@update');
  Route::get('/delete/product/{id}','ProductController@destroy');
  Route::get('/create/product', function(){return view('products.admin-create');});
  Route::post('/product/create', 'ProductController@create');
  //BillsController
  Route::get('/bills/create', function(){return view('bills.create');});
  Route::post('/create/bills', 'BillsController@create');
  Route::post('/search/bills', 'BillsController@search');
});
///////Route for auth
Route::middleware(['auth'])->group(function(){
  //BillsController
  Route::get('/bills', 'BillsController@index');
  Route::get('/bills/{user_id}', 'BillsController@userBills');
  Route::post('/retention/{id}', 'BillsController@retention');
  //StoreController
  Route::get('/brand/{brand}', 'StoreController@brand');
  Route::get('/category/{category}', 'StoreController@category');
  Route::get('/company/{company}', 'StoreController@company');
  Route::post('/store/search', 'StoreController@search');
  //CartController
  Route::post('/addToCar', 'CartController@add');
  Route::get('/cart/destroy', 'CartController@destroy');
  Route::post('/removeOfCart', 'CartController@remove');
  Route::post('/updateFromCart', 'CartController@update');

  Route::get('/cart', 'CartController@index');
  Route::post('/cart/mail', 'CartController@mail');
  Route::get('/download/{id}', 'OrderController@pdf');
  //ProductCotroller
  Route::get('/products/pdf/{variable}', 'ProductController@pdf');
});

Route::get('error', function(){
    abort(500);
});

Auth::routes();
