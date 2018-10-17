<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roomAllocation extends Model
{
    protected $table = 'room_allocations';
    protected $primaryKey = 'hostelNo';
    protected $fillable=['hostelNo','hostelName','roomNo','reg_no','reg_type','name','start_date','end_date','charge_per_month','charge_per_session'];
    //
}

