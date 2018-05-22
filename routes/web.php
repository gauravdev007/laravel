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

Route::get('register', function()
 
{
 
   return View::make('register');
   
 
});


Route::get('register/register1', 'registerController@register1');
Route::get('register/signin', 'registerController@signin');
Route::get('register/index', 'registerController@index');
Route::get('register/term_of_use', 'registerController@term_of_use');
Route::get('register/privacy', 'registerController@privacy');
Route::get('register/register1/register2', 'registerController@register2');
Route::post('register', 'registerController@validation');


