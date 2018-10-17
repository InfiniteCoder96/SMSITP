<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    //
    protected $table = 'hostels';
    protected $primaryKey = 'hostelNo';
    protected $fillable=['hostelNo','hostelName','description','address','contactNo','wardenName'];
}
