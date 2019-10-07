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

Route::get('/', function () {
    return view('welcome');
});


Route::get('shops/create/by_user/{user}/name/{shop_name}/country/{country}/city/{city}/address/{address}', "ShopController@create")->name('create_shop');

Route::get('products/create/by_user/{user}/product/{product_name}', "ProductController@create")->name('create_product');

Route::get('products/add/by_user/{user}/shop/{shop_name}/product/{product_name}/quantity/{quantity}/price/{price}', "ProductController@add")->name('add_product');

Route::get('users/create/user_name/{user_name}/email/{email}/password/{password}',"UserController@create")->name("create_user");