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
 
class uploadfilesController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
   
	
	protected function uploadfiles(Request $request)
    {
        if($request->hasFile('files'))
        {
			$allowedfileExtension=['pdf'];
			$files = $request->file('files');
		
			$filename = $files->getClientOriginalName();
			$extension = $files->getClientOriginalExtension();
			$check=in_array($extension,$allowedfileExtension);
			
			if($check)
			{
				if(Input::get('upload')) 
				{
	 
					$files->move(
							base_path().'/public/files', $filename
					);
					
					
						//\Session::flash('message', 'Successfull uploaded!!<br/>'.$info);
                    $patient_id=Session::get('id');
                    //$document=array();
					//$document = DB::table('patient_dashboard')->where('patient_id', $patient_id )->first();
                   $document = collect(\DB::select('select * from patient_dashboard where patient_id = ?',[$patient_id]))->first();
                    
                    
						if(var_dump($document->file=="null"))
						{
							DB::table('patient_dashboard')
							->where('patient_id',$patient_id)
							->update(['file' => $filename]);
						}
						else
						{
							$id = DB::table('patient_dashboard')->insertGetId(
							[ 'patient_id' => $patient_id, 'file' => $filename]
							);	
							 
						}
                    
				}	
			}
		    
        }
        return redirect('patient/uploadfiles');
    }
	
	protected function remove($id)
	{
		$file_status = 0;
		DB::table('patient_dashboard')
	    ->where('id',$id)
		->update(['file_status' => $file_status]);
		 return redirect('patient/uploadfiles');
	}
	
		
}