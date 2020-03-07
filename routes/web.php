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

Route::get('haizzz', function () {
    // test
    return view('partials.productdetail');
});
Route::get('', [ 
    'as'=> 'home',
    'uses'=>'Pages\\HomeController@getIndex']);
Route::get('/detailproduct/{id}', [ 
    'as'=> 'detailproduct',
    'uses'=>'Pages\\DetailProductController@getDetailproduct']);
// Route::get('', [ 
//     'as'=> 'home',
//     'uses'=>'Pages\\HomeController@getIndex']);