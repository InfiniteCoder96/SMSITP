<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coaches extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'coach_id';
    protected $fillable = ['coach_id','coach_name','sport_id','approval'];
    //
    //
}