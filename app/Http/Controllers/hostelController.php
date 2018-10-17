<?php

namespace App\Http\Controllers;

use App\Hostel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class hostelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hostels = hostel::all()->toArray();
        return view('Admin.Hostel_Management.Hostel_Management', compact('hostels'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Hostel_Management.Hostel_Management');
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
        $hostel=$this->validate(request(),[
            'hostelNo'=>'required',
            'hostelName'=>'required',
            'description'=>'required',
            'address'=>'required',
            'contactNo'=>'numeric',
            'wardenName'=>'required'


        ]);

        hostel::create($hostel);

        return back()->with('success','Hostel has been added');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($hostel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($hostel)
    {
        //
        $hostels= Hostel::find($hostel);
        return view('Admin.Hostel_Management.updateHostel',compact('hostel','hostels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request, $hostel)
    {
        $hostels = Hostel::find($hostel);
        $this->validate(request(), [
            'hostelNo'=>'required',
            'hostelName'=>'required',
            'description'=>'required',
            'address'=>'required',
            'contactNo'=>'numeric',
            'wardenName'=>'required'
        ]);

        $hostels->hostelNo = $request->get('hostelNo');
        $hostels->hostelName = $request->get('hostelName');
        $hostels->description = $request->get('description');
        $hostels->address = $request->get('address');
        $hostels->contactNo = $request->get('contactNo');
        $hostels->wardenName = $request->get('wardenName');



        $hostels->save();
        return redirect('hostels')->with('success','Hostel has been updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($hostel)
    {
        $hostels = Hostel::find($hostel);
        $hostels->delete();
        return redirect('hostels')->with('success','Hostel has been  deleted');
    }

}
