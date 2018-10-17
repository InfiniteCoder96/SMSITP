<?php

namespace App\Http\Controllers;

use App\nonacademic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class nonacademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nonacademics = nonacademic::all()->toArray();
        return view('Admin.HR_Management.non_academic_staff', compact('nonacademics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.HR_Management.non_academic_staff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nonacademic = new nonacademic();

        $this->validate(request(),[
            'name' =>'required',
            'nic' =>'required|min:10',
            'address' =>'required',
            'dob' =>'required|date|before:-18 years',
            'email' =>'required',
            'gender' =>'required',
            'status' =>'required',
            'category' =>'required',
            'contact_number' =>'required|min:10|numeric',
            'file' => 'required'
        ]);

        $nonacademic->name = $request->get('name');

        $nid = $this->idGenarator();
        $nonacademic->nid = $nid;

        $nic = $request->get('nic');
        $nonacademic->nic = $nic;

        $nonacademic->address = $request->get('address');
        $nonacademic->dob = $request->get('dob');
        $nonacademic->email = $request->get('email');
        $nonacademic->gender = $request->get('gender');
        $nonacademic->status = $request->get('status');
        $nonacademic->category = $request->get('category');
        $nonacademic->contact_number = $request->get('contact_number');

        if($request->hasFile('file')){
            $file_path = Input::file('file');

            if($file_path){
                $extension = $file_path->getClientOriginalExtension();

                $filename = $nic.'.'.$extension;

                $file_path_relative = 'storage/uploads/'.$filename;


                $file_path->move('storage/uploads/',$filename);

                $nonacademic->documents = $filename;
            }
        }
        $nonacademic->save();



        return back()->with('success', 'Staff member has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
        $nonacademic = nonacademic::find($id);
        return view('Admin.HR_Management.updatenonacademic',compact('nonacademic','id'));
//        return view('layouts.HRLayouts.updateAcademicStaffDetailsModal',compact('nonacademic','id'));
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
//        $nonacademic = nonacademic::find($request->get('id'));
        $nonacademic = new nonacademic();

        $nonacademic = nonacademic::find($id);
        $this->validate(request(),[
            'name' =>'required',
            'nic' =>'required|min:10',
            'address' =>'required',
            'dob' =>'required|date|before:-18 years',
            'email' =>'required',
            'gender' =>'required',
            'status' =>'required',
            'category' =>'required',
            'contact_number' =>'required|numeric|min:10',
            'file' =>'required',

        ]);

        $nonacademic->name = $request->get('name');
        $nonacademic->nic = $request->get('nic');
        $nonacademic->address = $request->get('address');
        $nonacademic->dob = $request->get('dob');
        $nonacademic->email = $request->get('email');
        $nonacademic->gender = $request->get('gender');
        $nonacademic->status = $request->get('status');
        $nonacademic->category = $request->get('category');
        $nonacademic->contact_number = $request->get('contact_number');

        if($request->hasFile('file')){
            $file_path = Input::file('file');

            if($file_path){
                $extension = $file_path->getClientOriginalExtension();

                $filename = $nic.'.'.$extension;

                $file_path_relative = 'storage/uploads/'.$filename;


                $file_path->move('storage/uploads/',$filename);

                $nonacademic->documents = $filename;
            }
        }
        $nonacademic->save();
        return redirect('nonacademic')->with('success', 'Staff member has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nonacademic = nonacademic::find($id);
        $nonacademic->delete();
        return redirect('nonacademic')->with('success','Staff member has been  deleted');
    }

    public function search(Request $request)
    {
        $x = $request->get('id');

        if($request->has('id'))
        {
            $nonacademics = nonacademic::where('id',$x)->get();
        }
        else
        {
            $nonacademics = nonacademic::get();
        }
        return view('Admin.HR_Management.non_academic_staff', compact('nonacademics'));
    }


    public function idGenarator()
    {
        $nonacademic = DB::table('nonacademic')->exists();

        $check = DB::table('nonacademic')->get();

        if($nonacademic == false){
            $nid = 'NS001';//final tid
        }

        else{
            foreach ($check as $value){
                $lastTid = $value->tid; //last record in DB
            }

            $strF = substr($lastTid,0,2);//NS
            $strL = str_after($lastTid,'NS');//002
            $str = $strL+1;//3

            if($strL < 10)
                $nid = $strF.'00'.$str;//AS003
            elseif ($strL < 100 and $strL > 10)
                $nid = $strF.'0'.$str;
            else
                $nid = $strF.$str;

            $nextId = $strL+1;
        }

        return $nid;

    }
}
