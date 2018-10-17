<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class non_academic_event extends Model
{
    protected $primaryKey = 'event_id';
    protected $fillable = ['event_id','date','heading','time','place','description','day','month'];
    //
}
