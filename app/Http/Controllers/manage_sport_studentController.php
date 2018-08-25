<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class manage_sport_studentController extends Controller

{

    public function create(){
        return view('manage_sport_students.create');
    }
    //
}
