<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studs extends Model
{
    protected $fillable = ['id' , 'name'];

    public function resultsF(){
        return $this->hasMany('App\Result','sId','id');
    }

    public function class_students(){
        return $this->belongsTo('App\ClassS','id','id');
    }

}
