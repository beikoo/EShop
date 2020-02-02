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

Auth::routes();

Route::group(['middleware' => ['auth','admin']], function () 
{
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });     
    Route::get('/UsersList', 'Admin\AdminController@registered');
    Route::get('/admin',  'Admin\ProductsController@getProductsDash');
    Route::get('/EditUser/{id}','Admin\AdminController@EditUser');
    Route::put('/UpdateUser/{id}', 'Admin\AdminController@UpdateUser');
    Route::delete('/DeleteUser/{id}', 'Admin\AdminController@DeleteUser');
    Route::get('/EditProducts',  'Admin\ProductsController@getProducts');
    Route::post('/saveproducts','Admin\ProductsController@Save');
    Route::get('EditProducts/{id}','Admin\ProductsController@Edit');
    Route::put('/UpdateProducts/{id}', 'Admin\ProductsController@Update');
    Route::delete('/DeleteProduct/{id}', 'Admin\ProductsController@Delete');
    Route::get('/sales', 'Admin\SalesController@getSales');
});

Route::group(['middleware' => ['auth',]], function () 
{
    Route::get('/home', function () 
    {
        return view('user.home');
    });
    Route::get('/products','User\UserProducts@getProducts');
    Route::get('/buy/{productID}/{userID}','User\UserProducts@Buy');

});