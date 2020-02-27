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
route::view('/','welcome');
route::view('home','home');
route::view('contact','contact');
route::view('about','about');

route::get('customers','CustomersController@list');
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/site/{site}","CustomersController@index");
