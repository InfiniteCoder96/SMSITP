<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassS extends Model
{
    //

    protected $fillable=['ClassID','ClassName','NoOfStudents','Venue'];
    protected $table='class_s';

    public $incrementing = false;
    protected $primaryKey='ClassID';

    public function ClassTeacherSR()
    {
        return $this->hasOne('App\ClassTeacherS','ClassID','ClassID');
    }
}
