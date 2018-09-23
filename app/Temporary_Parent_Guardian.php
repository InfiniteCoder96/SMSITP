<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporary_Parent_Guardian extends Model
{
    protected $primaryKey = 'child_id';

    protected $fillable = [
        'role','first_name','middle_name',
        'last_name','NIC_Passport','nationality',
        'race','religion','working_sector','profession',
        'occupation','work_place','email','work_address',
        'work_telephone','telephone_mob'

    ];

    public function student()
    {
        return $this->hasMany(TemporaryStudent::class,'tempsid','child_id');
    }
}
