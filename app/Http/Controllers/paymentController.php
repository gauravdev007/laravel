<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Factory;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator;
use Illuminate\Support\Facades\Input;
use DB;
use Hash;

use App\AdminLoginModel;

class paymentController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    protected function payment(Request $request)
	{
		$this->validate($request,[
	         
    			'fname' => 'required|string|min:2|max:35',
    			'lname' => 'required|string|min:2|max:35',
    			'address' => 'required',
				'apt' => 'required',
				'wisconisin' => 'required',
				'city' => 'required',
				'zip' => 'required',
				'card' => 'required|size:16',
				'cvv' => 'required|size:3',
				'mm' => 'required',
				'yy' => 'required',
				'certified' => 'required',
				'privacy' => 'required'

    		],[
			    
    			'fname.required' => ' The first name field is required.',
    			'fname.min' => ' The first name must be at least 2 characters.',
    			'fname.max' => ' The first name may not be greater than 35 characters.',
				'lname.required' => ' The last name field is required.',
    			'lname.min' => ' The last name must be at least 2 characters.',
    			'lname.max' => ' The last name may not be greater than 35 characters.',
				'address.required' => ' The address field is required.',
				'apt.required' => ' The apt/suite field is required.',
    			'wisconisin.max' => ' The wisconisin field is required.',
                'city.required' => ' The city field is required.',
				'zip.required' => ' The zip field is required.',
				'card.required' => ' The card field is required.',
				'card.size' => 'The card length is must be 16.',
				'mm.required' => ' The mm field is required.',
				'yy.required' => 'The yy field is required.',
				'cvv.required' => ' The cvv field is required.',
				'cvv.size' => ' The cvv length is must be 3.',
				'certified.required' => ' The certified field is required.',
				'privacy.required' => 'The privacy field is required.'
    		]);
			$fname = Input::get('fname');
			$lname = Input::get('lname');
			$address = Input::get('address');
			$apt = Input::get('apt');
			$wisconisin = Input::get('wisconisin');
			$city = Input::get('city');
			$zip = Input::get('zip');
			$card = Input::get('card');
			$cvv = Input::get('cvv');
			$mm = Input::get('mm');
			$yy = Input::get('yy');
			$coupan = Input::get('coupan');
			//$totalcost = Input::get('totalcost');
			$certified = Input::get('certified');
			$privacy = Input::get('privacy');
			$patient_id = Session::get('id');
		
			$maskingCharacter = 'X';
            $cardsave = substr($card, 0, 4) . str_repeat($maskingCharacter, strlen($card) - 8) . substr($card, -4);
            $cvvsave =  str_repeat($maskingCharacter, strlen($cvv) - 3);
			DB::table('patient_dashboard')
            ->where(['patient_id',$patient_id])
            ->update(['fname' => $fname, 'lname' => $lname, 'address' =>  $address, 'apt' => $apt, 'wisconisin' => $wisconisin, 'city' => $city, 'zip' => $zip, 'card' => $cardsave, 'cvv' => $cvvsave, 'mm' => $mm, 'yy' => $yy, 'coupan' => $coupan, 'certified' => $certified, 'privacy' => $privacy]);
			

			
				return Redirect::to('patient/consultationhistory');
	
	}
	
	
}