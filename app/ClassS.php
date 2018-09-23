<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassS extends Model
{
    protected $table    = 'studentclasses';
    protected $fillable = ['id' , 'classId'];

    public function students_class(){
        return $this->hasMany('App\Studs','id','id');
    }
}
