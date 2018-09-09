<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showAdminDashboard(){
        return view('Admin.User_Management.Admin.admin_view');
    }
}
