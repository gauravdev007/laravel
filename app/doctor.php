<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
	use Authenticatable;
	protected $table = 'doctors';
    protected $fillable = ['First_Name','Last_Name','email','username','speciality','degree','year','country','newsletter'];
	 protected $hidden = [
        'password', 'remember_token',
    ];
}
