<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionalHeadS extends Model
{
    //
    protected $fillable=['SectionID','SectionName','Grade','SectionalHeadID','SectionalHeadName'];
    protected $table='sectionalhead_s';

    public function SectionSR()
    {
        return $this->hasMany('App\SectionS','SectionalHeadID','SectionalHeadID');
    }
}
