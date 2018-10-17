<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class approvedPayment extends payment
{
    protected $table='approved_payments';

    protected $fillable = ['AdmissionNo','Amount','Bank','DepositedDate','Remark','Status'];
}
