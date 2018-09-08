<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturnBook extends Model
{
    protected $table = 'return_books';
    protected $fillable = ['firstname','lastname','memberid','memberphone','memberemail'];
}
