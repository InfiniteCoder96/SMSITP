<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff_Report extends Model
{
    //
    protected $table = 'staff__reports';
    protected $fillable=['EID','name','gender','section','mobile','vehicle_No','type','driver_name','dr_Mobile','route_Name','stop_Name'];
}


