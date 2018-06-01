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

Route::get('patient/healthhistory', function ()
    {
	 $patient_id = Session::get('id');	
     $checkbox = DB::select('select * from patient_dashboard where patient_id = ?',[$patient_id]);
	 
	  
		 
	  
	 
	 
	   return View::make('healthhistory',['checkbox'=>$checkbox]);
	    
		
	  
     
    });

Route::get('patient/uploadfiles', function()
 
{
    $patient_id = Session::get('id');
    $users = DB::select('select file, id from patient_dashboard where patient_id = ? and file_status = ?',[$patient_id, 1]);
	if($users!==null)
	{
    //return view('patient/uploadfiles');
    return View::make('uploadfiles',['users'=>$users]);
	}
   
});
Route::get('patient/payment', function()
 
{
 
   return View::make('payment');
   
});
Route::get('patient/finddoctor', function()
 
{
 
   return View::make('finddoctor');
   
});
Route::get('patient/consultationhistory', function()
 
{
 
   return View::make('consultationhistory');
   
});
Route::get('patient/planformedical', function()
 
{
 
   return View::make('planformedical');
   
});


Route::post('doctor/register', 'registerController@doctorvalidation');
Route::get('doctor/register/index', 'registerController@index');
Route::get('doctor/register/term_of_use', 'registerController@term_of_use');
Route::get('doctor/register/privacy', 'registerController@privacy');
Route::get('patient/register/step1', 'registerController@register1');
Route::post('patient/register/step1', 'registerController@patientvalidation');
Route::get('patient/register/step2', 'registerController@register2');
Route::post('patient/register/step2', 'registerController@patientvalidation');
Route::get('patient/register/step3', 'registerController@register3');
Route::get('patient/register/index', 'registerController@index');
Route::get('patient/register/term_of_use', 'registerController@term_of_use');
Route::get('patient/register/privacy', 'registerController@privacy');
Route::get('signin', 'registerController@signin');
Route::post('signin', 'signinController@signin');

Route::post('doctor/dashboard','dashboardController@personelprofile');
Route::get('signin/{token}', 'registerController@confirmation');

Route::post('patient/payment','paymentController@payment');
Route::post('patient/uploadfiles','uploadfilesController@uploadfiles');
Route::get('patient/uploadfiles/{id}', 'uploadfilesController@remove');
Route::post('patient/healthhistory', 'healthhistoryController@healthhistory');
