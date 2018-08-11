<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addStudent(){


        $students = Student::get();
        return view('Admin.User_Management.Student.view-insert_student')->with(compact('students'));

    }

//    public function viewStudents(Request $request){
//
//
//        return view('Admin.User_Management.Student.manageStudent')->with(compact('students'));
//    }
}
