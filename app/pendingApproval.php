<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pendingApproval extends Model
{
    protected  $table = 'pending_approvals';
    protected $fillable = ['AdmissionNo','Amount','Bank','DepositedDate','Remark','Status'];
}
