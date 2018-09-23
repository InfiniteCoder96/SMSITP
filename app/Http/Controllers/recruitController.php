<?php

namespace App\Http\Controllers;

use App\Recruit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;


class recruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $recruits = Recruit::all();
        return view('Admin.HR_Management.academic_staff', compact('recruits'));
    }


    public function search(Request $request)
    {
        $x = $request->get('tid');
//
        if($request->has('tid'))
        {
            $recruits = Recruit::where('tid','=',$x)->get();

        }
        else
        {
            $recruits = Recruit::get();
        }
        return view('Admin.HR_Management.academic_staff', compact('recruits'));
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.HR_Management.academic_staff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recruit = new Recruit();

        $this->validate(request(),[
            'name' =>'required',
            'nic' =>'required|min:10',
            'address' =>'required',
            'dob' =>'required|date|before:-18 years',
            'email' =>'required|email|unique:users,email',
            'gender' =>'required',
            'status' =>'required',
            'category' =>'required',
            'contact_number' =>'required|numeric|min:10',
            'file' => 'required'
        ]);

        $recruit->name = $request->get('name');
        $tid = $this->idGenarator();
        $recruit->tid = $tid;
        $nic = $request->get('nic');
        $recruit->nic = $nic;

        $recruit->address = $request->get('address');
        $recruit->dob = $request->get('dob');
        $recruit->email = $request->get('email');
        $recruit->gender = $request->get('gender');
        $recruit->status = $request->get('status');
        $recruit->category = $request->get('category');
        $recruit->contact_number = $request->get('contact_number');

        if($request->hasFile('file')){
            $file_path = Input::file('file');

            if($file_path){
                $extension = $file_path->getClientOriginalExtension();

                $filename = $nic.'.'.$extension;

                $file_path_relative = 'storage/uploads/'.$filename;


                $file_path->move('storage/uploads/',$filename);

                $recruit->documents = $filename;
            }
        }
        $recruit->save();



            return back()->with('success', 'Staff member has been added');
        }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recruit = Recruit::find($id);
        return view('Admin.HR_Management.updateAcademic',compact('recruit','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $recruit = Recruit::find($id);
        $this->validate(request(),[
            'name' =>'required',
            'nic' =>'required|min:10',
            'address' =>'required',
            'dob' =>'required|date',
            'email' =>'required|email|unique:users,email',
            'gender' =>'required',
            'status' =>'required',
            'category' =>'required',
            'contact_number' =>'required|numeric|min:10',
            'file' =>'required',
        ]);

        $recruit->name = $request->get('name');
        $recruit->nic = $request->get('nic');
        $recruit->address = $request->get('address');
        $recruit->dob = $request->get('dob');
        $recruit->email = $request->get('email');
        $recruit->gender = $request->get('gender');
        $recruit->status = $request->get('status');
        $recruit->category = $request->get('category');
        $recruit->contact_number = $request->get('contact_number');

        if($request->hasFile('file')){
            $file_path = Input::file('file');

            if($file_path){
                $extension = $file_path->getClientOriginalExtension();

                $filename = $nic.'.'.$extension;

                $file_path_relative = 'storage/uploads/'.$filename;


                $file_path->move('storage/uploads/',$filename);

                $recruit->documents = $filename;
            }
        }

        $recruit->save();
        return redirect('recruits')->with('success', 'Staff member has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recruit = recruit::find($id);
        $recruit->delete();
        return redirect('recruits')->with('success','Staff member has been  deleted');
    }

    public function idGenarator()
    {
        $recruit = DB::table('recruits')->exists();

        $check = DB::table('recruits')->get();

        if($recruit == false){
            $tid = 'AS001';//final tid
        }

        else{
            foreach ($check as $value){
                $lastTid = $value->tid; //last record in DB
            }

            $strF = substr($lastTid,0,2);//AS
            $strL = str_after($lastTid,'AS');//002
            $str = $strL+1;//3

            if($strL < 10)
                $tid = $strF.'00'.$str;//AS003
            elseif ($strL < 100 and $strL > 10)
                $tid = $strF.'0'.$str;
            else
                $tid = $strF.$str;

            $nextId = $strL+1;
        }

            return $tid;

    }
}
