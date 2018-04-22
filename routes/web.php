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

// Basic Routing
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('hello', function () {
//     return 'Hello World';
// });

// Route::get('about', function(){
//     return view('pages.about');
// });

// Route::get('user/{id}/{name}',function($id){
//     return 'This is user  id '.$id.' with an name of'.$name;
// });

//Basic Routing and Controller

Route::get('/', 'PagesController@index');
Route::get('about','PagesController@about');
Route::get('service','PagesController@service');

Route::resource ('posts','PostsController');