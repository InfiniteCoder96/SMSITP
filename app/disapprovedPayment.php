<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disapprovedPayment extends Model
{
    protected $table='disapproved_payments';
    protected $fillable = ['AdmissionNo','Amount','Bank','DepositedDate','Remark','Status'];
}
