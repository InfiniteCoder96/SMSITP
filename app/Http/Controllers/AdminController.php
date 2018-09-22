<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showAdminDashboard(){
        if(Auth::user()->role == 'Admin')
            return view('Admin.User_Management.Admin.admin_view');
        else
            return redirect('/login_user')->with('Status','Access Denied');
    }
}
