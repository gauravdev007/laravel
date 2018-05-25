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
            
			
			$firstName = Input::get('first_name');
			$lastName = Input::get('last_name');
			$email = Input::get('email');
			$altemail = Input::get('alternate_email');
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
			$id=Session::get('id');
			 
			DB::table('doctors')
            ->where('id',$id)
            ->update(['first_name' => $firstName, 'last_name' => $lastName, 'email' =>  $email, 'alternate_email' => $altemail, 'address' => $address, 'city' => $city, 'zip' => $zip, 'country' => $country, 'phone' => $phone, 'abbreviation' => $abbreviation, 'password' => $password, 'bio' => $bio]);
				
			if(Input::get('continue')) 
			{
                     return Redirect::to('doctor/dashboard/feesandpayment')->with('message', 'Doctor your personel profile Successfully made.'); //if login then use this method
            }
						
						
			
			
			die;
        
	 
			
			
            
			
   }
}