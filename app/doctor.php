<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    protected $fillable = ['First_Name','Last_Name','email','username'];
}
