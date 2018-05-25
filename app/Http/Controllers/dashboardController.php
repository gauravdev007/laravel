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


class dashboardController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
   
	
	protected function personelprofile(Request $request)
    {
	 $this->validate($request,[
				'address' => 'required',
				'city' => 'required|string',
				'zip' => 'required|numeric',
				'country' => 'required|string',
				'phone' => 'required|numeric'
				
    		],[
				'address.required' => ' The address field is required.',
                'city.required' => ' The city field is required.',
				'zip.required' => ' The zipcode field is required.',
				'country.required' => ' The country field is required.',
				'phone.required' => ' The mobile/cell number field is required.'
    		]);
            
			
			$firstName = Input::get('fname');
			$lastName = Input::get('lname');
			$email = Input::get('email');
			$altemail = Input::get('alternate_mail');
			$address = Input::get('address');
			$city = Input::get('city');
			$zip = Input::get('zip');
			$country = Input::get('country');
			$phone = Input::get('phone');
			$abbreviation = Input::get('abbreviation');
			$password = Input::get('password');
			$bio = Input::get('bio');
			//print_r($_POST);
			//die;
			//$profession = Input::get('profession', 'test');
			
			
				$id = DB::table('doctor_dashboard')->insertGetId(
						['DocFname' => $firstName, 'DocLname' => $lastName, 'DocEmail' => $email, 'DocAlternateEmail' => $altemail, 'DocAddress' => $address,'DocPassword' => $password, 'DocCity' => $city, 'DocZip' => $zip, 'DocCountry' => $country, 'DocPhone' => $phone, 'DocAbbreviation' => $abbreviation, 'DocBio' => $bio]
				);
				
						return Redirect::to('doctor/dashboard/feesandpayment')->with('message', 'Doctor your personel profile Successfully made.');
						
			
			$id= false;
			if($id) { echo 'true';}else{ echo 'false';}
			die;
        
	 
			
			
            
			
   }
}