<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class qBank extends Model
{
    protected $table    = 'qbanks';
    protected $fillable =['examId','subject','content'];
}
