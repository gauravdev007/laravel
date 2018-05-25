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

Route::get('doctor/register', function()
 
{
 
   return View::make('register');
   
 
});

Route::get('doctor/dashboard', function()
 
{
 
   return View::make('dashboard');
   
 
});
Route::get('doctor/dashboard/myappointment', function()
 
{
 
   return View::make('myappointment');
   
 
});
Route::get('doctor/dashboard/myavailability', function()
 
{
 
   return View::make('myavailability');
   
 
});
Route::get('doctor/dashboard/feesandpayment', function()
 
{
 
   return View::make('feesandpayment');
   
 
});


Route::post('doctor/register', 'registerController@doctorvalidation');
Route::get('doctor/register/index', 'registerController@index');
Route::get('doctor/register/term_of_use', 'registerController@term_of_use');
Route::get('doctor/register/privacy', 'registerController@privacy');
Route::get('patient/register/step1', 'registerController@register1');
Route::post('patient/register/step1', 'registerController@patientvalidation');
Route::get('patient/register/step2', 'registerController@register2');
Route::get('patient/register/index', 'registerController@index');
Route::get('patient/register/term_of_use', 'registerController@term_of_use');
Route::get('patient/register/privacy', 'registerController@privacy');
Route::get('signin', 'registerController@signin');
Route::post('signin', 'signinController@signin');

Route::post('doctor/dashboard','dashboardController@personelprofile');

