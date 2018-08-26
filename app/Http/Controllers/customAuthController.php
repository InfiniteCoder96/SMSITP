<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class customAuthController extends Controller
{
    public function showRegisterForm(){
        return view('auth.register');
    }

    public function register(Request $request){
        $this->validation($request);
        $data = $request;

        Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect('/')->with('Status','You have registered successfully');
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function login(Request $request){
        $this->validate($request, [

            'email' => 'required|string|email',
            'password' => 'required|string|min:6',

        ]);

        if(Auth::attempt(['email' => $request->email,'password' => $request ->password])){
            return redirect('/dashboard')->with('Status','You have registered successfully');
        }

            return 'failed';


        //return redirect('/')->with('Status','You have registered successfully');
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('Status','Logged out Successfully');
    }
    public function validation($request){
        return $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:6|confirmed',

        ]);
    }
}
