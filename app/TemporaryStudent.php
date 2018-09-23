<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class TemporaryStudent extends Model
{

    use Searchable;

    protected $primaryKey = 'tempsid';

    protected $fillable = [
        'tempsid','salutation','first_Name',
        'middle_Name','last_Name','DoB','NIC','Gender','Address','Email_Address',
        'Telephone_No_Mob','Telephone_No_Res','birth_certificate_no','religion','race',
        'country','nationality','blood_group','Known_Illnesses','Known_Allergies','blood_group'
    ];

    public function Temporary_Parent_Guardian()
    {
        return $this->hasOne(Temporary_Parent_Guardian::class,'child_id','tempsid');
    }

    public function Clasz()
    {
        return $this->hasOne('App\Clasz');
    }

}
