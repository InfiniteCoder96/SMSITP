<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sport_categories extends Model

{    public $incrementing = false;
    protected $primaryKey = 'sports_id';
    protected $fillable = ['sports_id','sports_name','coach_id','teacher_in_charge_id'];

    public function s_student(){
        return $this->hasMany(s_student::class);
    }
}
