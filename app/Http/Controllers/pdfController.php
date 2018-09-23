<?php

namespace App\Http\Controllers;

use App\Student;
use PDF;
use Illuminate\Http\Request;

class pdfController extends Controller
{
    public function stdApplication(Request $request){

        $student = Student::with('Parent_Guardian')->find($request->get('stdID'));


        $pdf = PDF::loadView('Frontend.stdApplicationDownload', compact('student'));
        return $pdf->stream('St.John College Student Admission Form.pdf');
    }

    public function stdIDCard(Request $request){

        $student = Student::with('Parent_Guardian')->find('18130001');

        $pdf = PDF::loadView('Admin.User_Management.Student.studentID', compact('student'))->setPaper([0, 0, 185.906, 240.945], 'landscape');
        return $pdf->stream('St.John College Student Identity Card.pdf');

    }
}
