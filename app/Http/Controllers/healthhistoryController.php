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
 
class healthhistoryController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
	 
	
	protected function healthhistory(Request $request)
    {   
              
			  $patient_id=Session::get('id');
			  DB::table('patient_dashboard')
			  ->where('patient_id',$patient_id)
			  ->update(['health_problem' => implode(',', (array) $request->get('health_problem'))]);
			   return redirect('patient/healthhistory');

    }
}