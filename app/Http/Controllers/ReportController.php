<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\SubjectTeacherS;
use PDF;

class ReportController extends Controller
{

    public function pdfS(){

        $pdf=PDF::loadView('Admin.Academic_Management.invoice');
        return $pdf->download('invoice.pdf');
    }

    public function index(){
        $data=['name'=>'Kalani'];
        $pdf = PDF::loadView('Admin.Academic_Management.invoice', compact('data'));
        return $pdf->download('invoice.pdf');
    }

    public function export(){
        $data=['name'=>'Kalani'];
        $pdf = PDF::loadView('Admin.Academic_Management.invoice', compact('data'));
        return $pdf->stream('invoice.pdf');
    }

    public function download(Request $request){

        $Results=null;

        if ($request->has('ID')) {

            $Results = SubjectTeacherS::where('SubjectTeacherID','=', $request->ID)->get();
            $SubID = SubjectTeacherS::where('SubjectTeacherID','=', $request->ID)->pluck('SubjectTeacherID');
            $SubName = SubjectTeacherS::where('SubjectTeacherID','=', $request->ID)->pluck('SubjectTeacherName');
            $pdf=PDF::loadView('Admin.Academic_Management.invoice',compact('Results','SubName','SubID'));
            return $pdf->download('List.pdf');

//            return view('Admin.Academic_Management.searchTeachers', compact('Results'));
        } else {
            $Results = null;
            return view('Admin.Academic_Management.invoice', compact('SubID','SubName'));
        }

    }

}
