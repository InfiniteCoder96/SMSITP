<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class expence extends Model

{
    public $incrementing = false;
    protected $table= 'expences';
    protected $primaryKey= 'ID';
    protected $fillable = ['ExpenceType','Name','ID','Amount','Email','Status','Date'];
}
