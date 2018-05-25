<?php

namespace App;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
	use Authenticatable;
	protected $table = 'doctors';
    protected $fillable = ['username','password'];
	 
}
