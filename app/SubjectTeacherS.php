<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectTeacherS extends Model
{
    //
    protected $fillable=['SubjectID','SubjectName','Range','SubjectTeacherID','SubjectTeacherName'];
    protected $table='subject_teacher_s';

    public function SubjectSR()
    {
        return $this->hasMany('App\SubjectS','SubjectTeacherID','SubjectTeacherID');
    }
}
