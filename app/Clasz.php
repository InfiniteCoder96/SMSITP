<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clasz extends Model
{
    protected $primaryKey = 'class_id';

    protected $fillable = [
        'section_id','total_students'
    ];
}
