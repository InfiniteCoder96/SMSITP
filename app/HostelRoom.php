<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostelRoom extends Model
{
    //
    protected $table = 'hostel_rooms';
    protected $fillable=['hostel_name','room_no','description','capacity','distance_from_school'];
}

