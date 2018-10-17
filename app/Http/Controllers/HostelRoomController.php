<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\HostelRoom;

class HostelRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $hostelRooms = HostelRoom::all()->toArray();
        return view('Admin.Hostel_Management.Room_Management', compact('hostelRooms'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Hostel_Management.Room_Management');
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
        $Room=$this->validate(request(),[
            'hostel_name'=>'required',
            'room_no'=>'required|numeric',
            'description'=>'required',
            'capacity'=>'required|numeric',
            'distance_from_school'=>'numeric'


        ]);

        HostelRoom::create($Room);

        return back()->with('success','Hostel Room has been added');
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
        $HostelRooms= HostelRoom::find($id);
        return view('Admin.Hostel_Management.updateRoom',compact('HostelRooms','id'));
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
        $hostelRooms = HostelRoom::find($id);
        $this->validate(request(), [
            'hostel_name'=>'required',
            'room_no'=>'required|numeric',
            'description'=>'required',
            'capacity'=>'required|numeric',
            'distance_from_school'=>'numeric'
        ]);

        $hostelRooms->hostel_name = $request->get('hostel_name');
        $hostelRooms->room_no = $request->get('room_no');
        $hostelRooms->description = $request->get('description');
        $hostelRooms->capacity = $request->get('capacity');


        $hostelRooms->save();
        return redirect('hostelRooms')->with('success','Room has been updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hostelroom = HostelRoom::find($id);
        $hostelroom->delete();
        return redirect('hostelRooms')->with('success','Room has been  deleted');
    }
}
