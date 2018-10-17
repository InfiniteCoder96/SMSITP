<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student_Report;

class Student_ReportController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_reports = Student_Report::all()->toArray();
        return view('Admin.Transport_Management.student', compact('student_reports'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('Admin.Transport_Management.student');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //
        $student_reports=new Student_Report();
        $this->validate(request(),[
            'SID'=>'required',
            'student_name'=>'required',
            'gender'=>'required',
            'grade'=>'required',
            'mobile'=>'numeric',
            'vehicleNo'=>'required',
            'type'=>'required',
            'driver_name'=>'required',
            'dr_mobile'=>'numeric',
            'route_name'=>'required',
            'stop_name'=>'required'


        ]);

        $student_reports->SID=$request->SID;
        $student_reports->student_name=$request->student_name;
        $student_reports->gender=$request->gender;
        $student_reports->grade=$request->grade;
        $student_reports->mobile=$request->mobile;
        $student_reports->vehicleNo=$request->vehicleNo;
        $student_reports->type=$request->type;
        $student_reports->driver_name=$request->driver_name;
        $student_reports->dr_mobile=$request->dr_mobile;
        $student_reports->route_name=$request->route_name;
        $student_reports->stop_name=$request->stop_name;



        try{
            $student_reports->save();
            return back()->with('success','Student Report has been added');

       }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors($e);
        }
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
        //
        $student_reports = Student_Report::find($id);
        return view('Admin.Transport_Management.updateStudent',compact('student_reports','id'));
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
        $student_reports = Student_Report::find($id);
        $this->validate(request(), [
            'SID'=>'required',
            'student_name'=>'required',
            'gender'=>'required',
            'grade'=>'required',
            'mobile'=>'numeric',
            'vehicleNo'=>'required',
            'type'=>'required',
            'driver_name'=>'required',
            'dr_mobile'=>'numeric',
            'route_name'=>'required',
            'stop_name'=>'required'

        ]);

        $student_reports->SID = $request->get('SID');
        $student_reports->student_name = $request->get('student_name');
        $student_reports->gender = $request->get('gender');
        $student_reports->grade = $request->get('grade');
        $student_reports->mobile = $request->get('mobile');
        $student_reports->vehicleNo = $request->get('vehicleNo');
        $student_reports->type = $request->get('type');
        $student_reports->driver_name = $request->get('driver_name');
        $student_reports->dr_mobile = $request->get('dr_mobile');
        $student_reports->route_name = $request->get('route_name');
        $student_reports->stop_name = $request->get('stop_name');


        try{
            $student_reports->save();
            return redirect('student_reports')->with('success','Student Report has been updated');

        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors($e);
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $student_reports = Student_Report::find($id);
            $student_reports->delete();
            return redirect('student_reports')->with('success','Student Report has been  deleted');
        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors($e);
        }
    }




}
