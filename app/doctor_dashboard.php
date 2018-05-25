<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor_dashboard extends Model
{
	use Authenticatable;
	protected $table = 'doctor_dashboard';
    protected $fillable = ['First_Name','Last_Name','email','username','speciality','degree','year','country','newsletter'];
	 protected $hidden = [
        'password', 'remember_token',
    ];
}
