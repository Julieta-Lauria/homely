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

Route::get("/products", "ProductsController@index");
Route::get("/products/create", "ProductsController@create");
Route::post("/products/store", "ProductsController@store");
Route::get('/products/edit/{id}', 'ProductsController@edit');
Route::put('/products/{id}', 'ProductsController@update');
Route::get('/products/{id}', 'ProductsController@show');
Route::delete('/products/{id}', 'ProductsController@destroy');

Route::get("/index", function(){
  return view("index");
});

Route::get("/faq", function(){
  return view("faq");
});

Route::get("/login", "UsuarioController@login");

Route::get("/logout", function(){
  return view("logout");
});

Route::get("/profile", function(){
  return view("profile");
});

Route::get("/register", function(){
  return view("profile");
});
