<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class s_student extends student
{
    use Searchable;

    protected $primaryKey = 'student_id';
    protected $fillable = ['student_id','student_name','sport_id','approval'];
    //
    //
}
