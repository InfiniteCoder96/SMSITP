<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class t_incharge extends Model
{

    public $incrementing = false;
    protected $primaryKey = 'teacher_id';
    protected $fillable = ['teacher_id','teacher_name','sport_id','o_docs'];
    //
}
