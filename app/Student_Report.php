<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student_Report extends Model
{
    //
    protected $table = 'student__reports';
    protected $fillable=['SID','student_name','gender','grade','mobile','vehicleNo','type','driver_name','dr_mobile','route_name','stop_name'];
}



