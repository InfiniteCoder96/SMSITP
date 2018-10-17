<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{


    protected $fillable = ['AdmissionNo','Bank','Branch','Amount','DepositedDate','Remark'];

}
