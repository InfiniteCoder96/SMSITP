<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    public $incrementing='false';
    protected $table = 'salary';
    protected $primaryKey = 'id';
    protected $fillable =['id','sid','category','leave','name','bSalary','allowance','bonus','deduction','net_salary'];
}
