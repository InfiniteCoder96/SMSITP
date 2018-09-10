<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sport_categories extends Model
{
    protected $primaryKey = 'sports_id';
    protected $fillable = ['sports_id','sports_name','coach_id','teacher_in_charge_id'];
    //
}
