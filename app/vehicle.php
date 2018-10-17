<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    //
    protected $table = 'vehicles';
    protected $primaryKey = 'id';
    protected $fillable=['regNo','regOwner','address','Mfg','chassisNo','seating_Capacity','wheelBase','Regn_Authority','Regn_date','regn_Valid','fuel','type_Of_Body','vehicle_Class','engineNo','tax','colour'];
}


