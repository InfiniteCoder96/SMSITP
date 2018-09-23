<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class TemporaryStudent extends Model
{

    use Searchable;

    public $incrementing = false;
    protected $primaryKey = 'temp_sid';

    protected $fillable = [
        'temp_sid','parent_Id','salutation','first_Name',
        'middle_Name','last_Name','DoB','NIC','Gender','Address','Email_Address',
        'Telephone_No_Mob','Telephone_No_Res','religion','race',
        'country','nationality','blood_group','Known_Illnesses','Known_Allergies','blood_group','image','reference_num'
    ];

    public function Temporary_Parent_Guardian()
    {
        return $this->hasOne(Temporary_Parent_Guardian::class,'temp_prId','parent_Id');
    }

    public function Clasz()
    {
        return $this->hasOne('App\Clasz');
    }

}
