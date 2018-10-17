<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class s_student extends model
{
    public $incrementing = false;
    protected $primaryKey = 'student_id';
    protected $fillable = ['student_id','student_name','sport_id','approval'];

    public function sport_categories(){
        return $this->hasMany(sport_categories::class ,'sports_id','sport_id');
    }
}
