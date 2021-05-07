<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth']],function(){
Route::get('/home', 'HomeController@index')->name('home');
Route::get('add_product', 'ProductController@create');
Route::post('Product_store', 'ProductController@store');
Route::get('Product_list', 'ProductController@index');
Route::get('Product_delete/{id}', 'ProductController@destroy');
Route::get('Product_edit/{id}', 'ProductController@edit');
Route::post('Product_update', 'ProductController@update');
Route::get('detailes/{id}','ProductController@show');
Route::post('add_card','CardController@store');
Route::get('card_list','CardController@index');
Route::get('card_delete/{id}','CardController@destroy');


});