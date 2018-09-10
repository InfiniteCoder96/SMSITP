<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Student extends Model
{
    use Searchable;

    protected $primaryKey = 'sid';

    protected $fillable = [
        'sid','salutation','first_Name',
        'middle_Name','last_Name','DoB','NIC','Gender','Address','Email_Address',
        'Telephone_No_Mob','Telephone_No_Res','birth_certificate_no','religion','race',
        'country','nationality','blood_group','Known_Illnesses','Known_Allergies'
    ];

}
