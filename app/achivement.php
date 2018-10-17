<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class achivement extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'sport_id';
    protected $fillable = ['sport_id','sport_name','coach_id','achivement']; //
}
