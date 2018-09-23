<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionS extends Model
{
    //
    protected $fillable=['SectionID','SectionName','Grade','NoOfClasses','NoOfStudents'];
    protected $table='section_s';
    protected $primaryKey='SectionID';
    public $incrementing = false;

    public function SectionalHeadSR()
    {
        return $this->hasMany('App\SectionalHeads','SectionID','SectionID');
    }
}
