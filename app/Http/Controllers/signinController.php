<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Validation\Factory;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;
use Illuminate\Support\Facades\Input;
use DB;
use Hash;

use App\AdminLoginModel;

class signinController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function signin(Request $request)
	{
		
		 $this->validate($request,[
    			'login' => 'required',
				'password' => 'required'
				
    		],[
				'login.required' => ' The eamil/username field is required.',
				'password.required' => ' The password field is required.'
    		]);
			
			 $login = filter_var($request->input('login'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
			 $password = $request->input('password');
             $request->merge([
             $login = $request->input('login')
			 ]);

          
			  $signin = DB::select('select * from doctors where email = ? or username = ? and password = ?', [$login, $login, $password]);
			   if(is_array($signin) && count($signin) > 0) {
				return Redirect::to('doctor/dashboard')->with('message', 'login');
			    }
			
			   else {
			
			      return Redirect::to('signin')->with('message', 'failed');
			
			    }
		   
		  
	

         
	
			
			
	}
}
