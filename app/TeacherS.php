<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeacherS extends Model
{
    //
    protected $fillable=['TeacherID','TeacherName','Email','ContactNo','Qualifications'];
    protected $table='teacher_s';

//    public function ClassTeacherISR()
//    {
//        return $this->ISA('App\ClassTeacherS','ClassTeacherID','TeacherID');
//    }
}
