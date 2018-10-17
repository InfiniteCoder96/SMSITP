<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassTeacherS extends Model
{
    //
    protected $fillable=['ClassID','ClassName','ClassTeacherID','ClassTeacherName','Subject'];
    protected $table='class_teacher_s';


    public function ClassSR()
    {
        return $this->hasOne('App\ClassS','ClassTeacherID','ClassTeacherID');
    }
}
