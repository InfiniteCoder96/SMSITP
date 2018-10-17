<?php

namespace App\Http\Controllers;

use App\HostelRoom;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\roomAllocation;

class allocationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomallocations = roomAllocation::all()->toArray();
        return view('Admin.Hostel_Management.Room_Allocation', compact('roomallocations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Hostel_Management.Room_Allocation');
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
        $RoomAllocation=$this->validate(request(),[
            'hostelNo'=>'required',
            'hostelName'=>'required',
            'roomNo'=>'required',
            'reg_no'=>'required',
            'reg_type'=>'required',
            'name'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'charge_per_month'=>'required',
            'charge_per_session'=>'required'


        ]);

        roomAllocation::create($RoomAllocation);

        return back()->with('success','Hostel Room has been added');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show($hostelNo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function edit($hostelNo)
    {
        //
        $roomallocations= roomAllocation::find($hostelNo);
        return view('Admin.Hostel_Management.updateRoomAllocation',compact('roomallocations','hostelNo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $hostelNo)
    {
        $roomallocations = roomAllocation::find($hostelNo);
        $this->validate(request(), [
            'hostelNo'=>'required',
            'hostelName'=>'required',
            'roomNo'=>'required',
            'reg_no'=>'required',
            'reg_type'=>'required',
            'name'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'charge_per_month'=>'required',
            'charge_per_session'=>'required'
        ]);

        $roomallocations->hostelNo = $request->get('hostelNo');
        $roomallocations->hostelName = $request->get('hostelName');
        $roomallocations->roomNo = $request->get('roomNo');
        $roomallocations->reg_no = $request->get('reg_no');
        $roomallocations->reg_type = $request->get('reg_type');
        $roomallocations->name = $request->get('name');
        $roomallocations->start_date = $request->get('start_date');
        $roomallocations->end_date = $request->get('end_date');
        $roomallocations->charge_per_month = $request->get('charge_per_month');
        $roomallocations->charge_per_session = $request->get('charge_per_session');


        $roomallocations->save();
        return redirect('room_allocations')->with('success','Room Allocation has been updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($hostelNo)
    {
        $hostelroom = roomAllocation::find($hostelNo);
        $hostelroom->delete();
        return redirect('room_allocations')->with('success','Room Allocation has been  deleted');
    }

}

