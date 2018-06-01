<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Factory;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use DB;
use Hash;
use App\doctor;
use Mail;


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
	 
	public function register3()
    {
        return view('register3');
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
			
			$input=array();
			$input = $request->all();
            $data=array();
            $data = $input;
			$data['token'] = str_random(25);
			Session(['token' => $data['token']]);
			
			$users = DB::select('select * from doctors where (email = ? or username = ?) and role = ?', [$email, $username, "doctor" ]);

			if(is_array($users) && count($users) > 0) {
				
				return Redirect::to('doctor/register')->with('message', 'Doctor already registered.');

			}
			else {
			
				$id = DB::table('doctors')->insertGetId(
						['role' => $role,'first_name' => $firstName, 'last_name' => $lastName, 'email' => $email, 'username' => $username, 'password' => $password, 'speciality' => $speciality, 'graduation' => $graduation, 'degree' => $degree, 'year' => $year, 'profession' => $profession, 'country' => $country, 'newsletter' => $newsletter, 'token' => $data['token']]
				);
				
              
				Mail::send('mails.confirmation', $data, function($message) use($data) 
				{
					$message->to($data['email']);
					$message->subject('Registeration Confirmation');
				});
	
            }
			
				return Redirect::to('signin')->with('message', 'please go to your email and  confirm your verification.');
	}
			
			
   
   	public function confirmation($token)
    {
		
		$user=array();
		$user = DB::select('select id, role, verified, token from doctors where token = ?', [$token]);

        if(!is_null($user))
        {
			foreach ($user as $result) {
				Session(['id' => ($result->id)]);
				$id=Session::get('id');
				Session(['role' => ($result->role)]);
				$role=Session::get('role');
				$result->verified = 1;
				Session(['verified' => ($result->verified)]);
				$result->token = '';
				DB::table('doctors')
				->where([['id',$id] , ['role', $role]])
				->update(['verified' => ($result->verified), 'token' =>  ($result->token)]);
				return Redirect::to('signin')->with('message', 'your activation code is registered so you can do login.');
			}
        }
        
    }

   protected function patientvalidation(Request $request)
	{       

		if(Input::get('next'))
			
		
		{
			$this->validate($request,[
		    'First_Name' => 'required|string|min:2|max:35',
			'Last_Name' => 'required|string|min:2|max:35',
			'email' => 'required|email|unique:users',
			'username' => 'required|string|max:35',
			'password' => 'required|min:8|max:10',
			'confrmpass' => 'required:password|same:password|min:6|max:10'
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
			'password.min' => ' The password must be at least 8 characters.',
			'password.max' => ' The password may not be greater than 8 characters.'
		    ]); 
		    
			 $role = Input::get('role');
			$firstName = Input::get('First_Name');
			$lastName = Input::get('Last_Name');
			$email = Input::get('email');
			$username = Input::get('username');
			$password = Input::get('password');
			$confrmpass = Input::get('confrmpass');
			
			Session(['role' => $role]);
			Session(['firstname' => $firstName]);
			Session(['lastname' => $lastName]);
			Session(['email' => $email]);
			Session(['username' => $username]);
			Session(['password' => $password]);
			

			return Redirect::to('patient/register/step2');
		}
		else
		{
			 $this->validate($request,[
						
						'gender' => 'required',
						'newsletter' => 'required'
					
					],[
						'gender.required' => ' please select your gender',	
			]);
			
			$fn=Session::get('firstname');
			$ln=Session::get('lastname');
			$rol=Session::get('role');
			$emal=Session::get('email');
			$usern=Session::get('username');
			$pass=Session::get('password');
			
			$dob = Input::get('dob');
			$zipcode = Input::get('zipcode');
			$phone = Input::get('phone');
			$treatment = Input::get('treatment');
			$country = Input::get('country');
			$gender = Input::get('gender');
			$newsletter = Input::get('newsletter');
			
			$input=array();
			$input = $request->all();
			$data=array();
			$data = $input;
			$data['First_Name'] = Session::get('firstname');
			$data['token'] = str_random(25);
			Session(['token' => $data['token']]);

			$users = DB::select('select * from doctors where (email = ? or username = ?) and role = ?', [$emal, $usern, "patient"]);
			

			
			if(is_array($users) && count($users) > 0) {
				return Redirect::to('patient/register/step2')->with('message', 'Patient already registered.');
			}
			
			else {
			    $id = DB::table('doctors')->insertGetId(
							['role' => $rol,'first_name' => $fn, 'last_name' => $ln, 'email' => $emal, 'username' => $usern, 'password' => $pass, 'dob' => $dob, 'zip' => $zipcode, 'phone' => $phone, 'treatment' => $treatment, 'country' => $country, 'newsletter' => $newsletter, 'gender' => $gender, 'token' => $data['token']]
					);
				Session(['id' => $id]);	
				$das_id = DB::table('patient_dashboard')->insertGetId(
							['patient_id' => $id]
					);	
			    
			     
				Mail::send('mails.confirmation', $data, function($message) use($data) 
				{
					$message->to(Session::get('email'));
					$message->subject('Registeration Confirmation');
				});

			    return Redirect::to('patient/register/step3')->with('message', 'Patient registered successfully');
			}
		}
	    	
    }
}
