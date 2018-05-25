<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Factory;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Input;
use DB;
use Hash;
use Illuminate\Support\Facades\Session;

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
	
	protected function doctorvalidation(Request $request)
    {
	 $this->validate($request,[
	         
    			'First_Name' => 'required|string|min:2|max:35',
    			'Last_Name' => 'required|string|min:2|max:35',
    			'email' => 'required|email|unique:users',
				'username' => 'required|string|max:35',
				'password' => 'required|alphaNum|min:8|max:10',
				'speciality' => 'required',
				'degree' => 'required',
				'year' => 'required',
				'country' => 'required'
				
    		],[
			    
    			'First_Name.required' => ' The first name field is required.',
    			'First_Name.min' => ' The first name must be at least 2 characters.',
    			'First_Name.max' => ' The first name may not be greater than 35 characters.',
				'Last_Name.required' => ' The last name field is required.',
    			'Last_Name.min' => ' The last name must be at least 2 characters.',
    			'Last_Name.max' => ' The last name may not be greater than 35 characters.',
				'email.required' => ' The email field is required.',
				'username.required' => ' The username field is required.',
    			'username.max' => ' The username may not be greater than 35 characters.',
                'password.required' => ' The password field is required.',
				'country.required' => ' please select state/country.',
				'degree.required' => ' please select degree.',
				'year.required' => ' please select year.',
				'speciality.required' => ' please select speciality.'
    		]);
			$role = Input::get('role');
			$firstName = Input::get('First_Name');
			$lastName = Input::get('Last_Name');
			$email = Input::get('email');
			$username = Input::get('username');
			$password = Input::get('password');
			$speciality = Input::get('speciality');
			$graduation = Input::get('graduate');
			$degree = Input::get('degree');
			$year = Input::get('year');
			$profession = Input::get('profession');
			$country = Input::get('country');
			$newsletter = Input::get('newsletter');
			//$profession = Input::get('profession', 'test');
			
			$users = DB::select('select * from doctors where email = ? or username = ?', [$email, $username]);
			//print_r($users); die;
			if(is_array($users) && count($users) > 0) {
				  Session(['first_name' => $firstName]);
				  Session(['last_name' => $lastName]);
				  Session(['email' => $email]);
				  Session(['password' => $password]);
				  Session(['country' => $country]);
					return Redirect::to('doctor/register')->with('message', 'Doctor already registered.');
					//'message' => 'Doctor already registered.'
				
			}
			else {
			
				$id = DB::table('doctors')->insertGetId(
						['role' => $role,'first_name' => $firstName, 'last_name' => $lastName, 'email' => $email, 'username' => $username, 'password' => $password, 'speciality' => $speciality, 'graduation' => $graduation, 'degree' => $degree, 'year' => $year, 'profession' => $profession, 'country' => $country, 'newsletter' => $newsletter]
				);
				  Session(['id' => $id]);
				  Session(['first_name' => $firstName]);
				  Session(['last_name' => $lastName]);
				  Session(['email' => $email]);
				  Session(['password' => $password]);
				  Session(['country' => $country]);
						return Redirect::to('signin')->with('message', 'Doctor registered Successfully.');
						//'message' => 'Doctor already registered.',
						//return view('signin');
				
			}
			$id= false;
			if($id) { echo 'true';}else{ echo 'false';}
			
			      
			
			die;
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
	 
			doctor::create($request->all());
			return view('signin');
			
            
			
   }
   
   protected function patientvalidation(Request $request)
    {
	 $this->validate($request,[
    			'First_Name' => 'required|string|min:2|max:35',
    			'Last_Name' => 'required|string|min:2|max:35',
    			'email' => 'required|email|unique:users',
				'username' => 'required|string|max:35',
				'password' => 'required|password|min:8|max:10',
				'confrmpass' => 'required:password|same:password|min:6|max:10',
				'gender' => 'required',
				'newsletter' => 'required'
			
    		],[
    			'First_Name.required' => ' The first name field is required.',
    			'First_Name.min' => ' The first name must be at least 2 characters.',
    			'First_Name.max' => ' The first name may not be greater than 35 characters.','Last_Name.required' => ' The last name field is required.',
    			'Last_Name.min' => ' The last name must be at least 2 characters.',
    			'Last_Name.max' => ' The last name may not be greater than 35 characters.',
				'email.required' => ' The email field is required.',
				'username.required' => ' The username field is required.',
    			'username.max' => ' The username may not be greater than 35 characters.',
				'gender.required' => ' please select your gender',
				
				
				'password.required' => ' The password field is required.',
				'password.min' => ' The password must be at least 8 characters.',
				'password.max' => ' The password may not be greater than 8 characters.',
				
    		]);
			$firstName = Input::get('First_Name');
			$lastName = Input::get('Last_Name');
			$email = Input::get('email');
			$username = Input::get('username');
			$password = Input::get('password');
			$confrmpass = Input::get('confrmpass');
			$dob = Input::get('dob', 'test');
			$zipcode = Input::get('zipcode', 'test');
			$phone = Input::get('phone', 'test');
			$treatment = Input::get('treatment', 'test');
			$country = Input::get('country', 'test');
			$gender = Input::get('gender');
			$newsletter = Input::get('newsletter');
			//$profession = Input::get('profession', 'test');
			
		$users = DB::select('select * from patient where email = ? or username = ?', [$email, $username]);
			//print_r($users); die;
			if(is_array($users) && count($users) > 0) {
				return Redirect::to('doctor/register')->with('message', 'Patient already registered.');
			}
			
			else {
			$id = DB::table('patient')->insertGetId(
					['first_name' => $firstName, 'last_name' => $lastName, 'email' => $email, 'username' => $username, 'password' => $password, 'dob' => $dob, 'gender' => $gender, 'zipcode' => $zipcode, 'phone' => $phone, 'treatment' => $treatment, 'country' => $country, 'newsletter' => $newsletter]
			);
			return Redirect::to('signin')->with('message', 'Patient registered successfully');
			
			}
			$id= false;
			if($id) { echo 'true';}else{ echo 'false';}
			die;
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
	 
			doctor::create($request->all());
			return view('signin');
			
            
			
   }
   
  
}
