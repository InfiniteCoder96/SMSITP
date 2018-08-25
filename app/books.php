<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $primaryKey ='isbn';
    protected $fillable = ['bookname','authorname','barcode','isbn'];
    protected $table = 'books';
}
