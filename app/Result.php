<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table    = 'results';
    protected $fillable =['sId','examId','subject','marks'];

    public function studentF(){
        return $this->belongsTo('App\Studs','sId','id');
    }
}
