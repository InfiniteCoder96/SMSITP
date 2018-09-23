<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parent_Guardian extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'prId';

    protected $fillable = [
        'prId','role','first_name','middle_name',
        'last_name','NIC_Passport','nationality',
        'race','religion','working_sector','profession',
        'occupation','work_place','email','work_address',
        'work_telephone','telephone_mob'

    ];

    public function student()
    {
        return $this->hasMany(student::class,'parent_Id');
    }
}
