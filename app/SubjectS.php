<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubjectS extends Model
{
    //
    protected $fillable=['SubjectID','Range','SubjectName','Grade'];
    protected $table='subject_s';


    protected  $primaryKey='SubjectID';
    public $incrementing = false;

    public function SubjectTeacherSR()
{
    return $this->hasMany('App\SubjectTeacherS','SubjectID','SubjectID');
}
}
