<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporary_Parent_Guardian extends Model
{
    public $incrementing = false;
    protected $primaryKey = 'temp_prId';

    protected $fillable = [
        'temp_prId','role','first_name','middle_name',
        'last_name','NIC_Passport','nationality',
        'race','religion','working_sector','profession',
        'occupation','work_place','email','work_address',
        'work_telephone','telephone_mob'

    ];

    public function temporary_student()
    {
        return $this->hasMany(TemporaryStudent::class,'parent_Id','temp_prId');
    }
}
