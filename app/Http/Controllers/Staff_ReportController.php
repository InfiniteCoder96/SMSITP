<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Staff_Report;

class Staff_ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff_reports = Staff_Report::all()->toArray();
        return view('Admin.Transport_Management.staff', compact('staff_reports'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('Admin.Transport_Management.staff');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $staff_reports=new Staff_Report();
        $this->validate(request(),[
            'EID'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'section'=>'required',
            'mobile'=>'required',
            'vehicle_No'=>'required',
            'type'=>'required',
            'driver_name'=>'required',
            'dr_Mobile'=>'required',
            'route_Name'=>'required',
            'stop_Name'=>'required'


        ]);

        $staff_reports->EID=$request->EID;
        $staff_reports->name=$request->name;
        $staff_reports->gender=$request->gender;
        $staff_reports->section=$request->section;
        $staff_reports->mobile=$request->mobile;
        $staff_reports->vehicle_No=$request->vehicle_No;
        $staff_reports->type=$request->type;
        $staff_reports->driver_name=$request->driver_name;
        $staff_reports->dr_Mobile=$request->dr_Mobile;
        $staff_reports->route_Name=$request->route_Name;
        $staff_reports->stop_Name=$request->stop_Name;



//        try{
            $staff_reports->save();
            return back()->with('success','Staff Report has been added');

////        }catch (Exception $e){
//            return redirect()->back()->withInput()->withErrors($e);
//      //  }


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
        $staff_reports= Staff_Report::find($id);
        return view('Admin.Transport_Management.updateStaff',compact('staff_reports','id'));
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
        $staff_reports = Staff_Report::find($id);
        $this->validate(request(), [
            'EID'=>'required',
            'name'=>'required',
            'gender'=>'required',
            'section'=>'required',
            'mobile'=>'numeric',
            'vehicle_No'=>'required',
            'type'=>'required',
            'driver_name'=>'required',
            'dr_Mobile'=>'numeric',
            'route_Name'=>'required',
            'stop_Name'=>'required'

        ]);

        $staff_reports->EID = $request->get('EID');
        $staff_reports->name = $request->get('name');
        $staff_reports->gender = $request->get('gender');
        $staff_reports->section = $request->get('section');
        $staff_reports->mobile = $request->get('mobile');
        $staff_reports->vehicle_No = $request->get('vehicle_No');
        $staff_reports->type = $request->get('type');
        $staff_reports->driver_name = $request->get('driver_name');
        $staff_reports->dr_Mobile = $request->get('dr_Mobile');
        $staff_reports->route_Name = $request->get('route_Name');
        $staff_reports->stop_Name = $request->get('stop_Name');


        try{
            $staff_reports->save();
            return redirect('staff_reports')->with('success','Staff Report has been updated');

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
            $staff_reports = Staff_Report::find($id);
            $staff_reports->delete();
            return redirect('staff_reports')->with('success','Staff Report has been  deleted');

        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors($e);
        }
    }
}
