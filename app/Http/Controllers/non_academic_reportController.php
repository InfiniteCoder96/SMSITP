<?php

namespace App\Http\Controllers;

use App\s_student;
use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class non_academic_reportController extends Controller
{

    public function sport_students_report(Request $request){

        $sport_students = s_student::with('sport_categories')->find($request->get('sid'));

        $pdf = PDF::loadView('Admin\Non_Academic_Management\invoice',compact('sport_students'));
        return $pdf->stream('Sport Student Report.pdf');

    }
}
