<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nonacademic extends Model
{
    protected $table = 'nonacademic';
    protected $fillable =['rid','name','contact_number','category'];
}
