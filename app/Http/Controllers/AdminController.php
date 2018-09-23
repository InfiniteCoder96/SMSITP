<?php

namespace App\Http\Controllers;

use App\Student;
use App\TemporaryStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showAdminDashboard(){
        $temp_students = $this->loadTemoraryStudents();
        $reg_students = $this->loadRegisteredStudents();

        if(Auth::user()->role == 'Admin')
            return view('Admin.User_Management.Admin.admin_view')->with(compact('temp_students','reg_students'));
        else
            return redirect('/login_user')->with('Status','Access Denied');
    }

    public function loadTemoraryStudents(){
        $temp_students = TemporaryStudent::count();
        return $temp_students;
    }

    public function loadRegisteredStudents(){
        $reg_students = student::count();
        return $reg_students;
    }


}
