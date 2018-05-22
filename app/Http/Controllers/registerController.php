<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Validation\Factory;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;
use Input;
use DB;



use App\doctor;



class registerController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function register1()
    {
        return view('register1');
    }
	
	public function signin()
    {
        return view('signin');
    }
	
	 public function index()
    {
        return view('index');
    }
	
	 public function term_of_use()
    {
        return view('term_of_use');
    }
	
	public function privacy()
    {
        return view('privacy');
    }
	
	public function register2()
    {
        return view('register2');
    }
	
	protected function validation(Request $request)
    {
	 $this->validate($request,[
    			'First_Name' => 'required|string|min:2|max:35',
    			'Last_Name' => 'required|string|min:2|max:35',
    			'email' => 'required|email|unique:users',
				'username' => 'required|string|max:35',
				
				'speciality' => 'required',
				'degree' => 'required',
				'year' => 'required',
				'country' => 'required',
				
    		],[
    			'First_Name.required' => ' The first name field is required.',
    			'First_Name.min' => ' The first name must be at least 2 characters.',
    			'First_Name.max' => ' The first name may not be greater than 35 characters.','Last_Name.required' => ' The last name field is required.',
    			'Last_Name.min' => ' The last name must be at least 2 characters.',
    			'Last_Name.max' => ' The last name may not be greater than 35 characters.',
				'email.required' => ' The email field is required.',
				'username.required' => ' The username field is required.',
    			'username.max' => ' The username may not be greater than 35 characters.',
				
				
				'country.required' => ' please select state/country.',
				'degree.required' => ' please select degree.',
				'year.required' => ' please select year.',
				'speciality.required' => ' please select speciality.',
    		]);
			
	 
			doctor::create($request->all());
			return view('signin');
			
            
			
   }
   
  
}
