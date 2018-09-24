<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruit extends Model
{
//    public $incrementing='false';
//    protected $primaryKey = 'tid';
    protected $fillable =['id','tid','name','nic','address','dob','email','gender','status','category','contact_number'];
}
