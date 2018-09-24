<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nonacademic extends Model
{
    protected $table = 'nonacademic';
    protected $fillable =['id','nid','name','nic','dob','email','gender','status','category','contact_number'];
}
