<?php

namespace App\Http\Controllers;

use App\vehicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class vehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = vehicle::all()->toArray();
        return view('Admin.Transport_Management.Vehicle_Registration', compact('vehicles'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('Admin.Transport_Management.Vehicle_Registration');
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
        $vehicle=$this->validate(request(),[
            'regNo'=>'numeric',
            'regOwner'=>'required',
            'address'=>'required',
            'Mfg'=>'numeric',
            'chassisNo'=>'numeric',
            'seating_Capacity'=>'numeric',
            'wheelBase'=>'numeric',
            'Regn_Authority'=>'required',
            'Regn_date'=>'numeric',
            'regn_Valid'=>'numeric',
            'fuel'=>'numeric',
            'type_Of_Body'=>'required',
            'vehicle_Class'=>'numeric',
            'engineNo'=>'numeric',
            'tax'=>'numeric',
            'colour'=>'required'


        ]);

        vehicle::create($vehicle);

        return back()->with('success','Vehicle has been added');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */



    public function show($vehicle)
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
        $vehicles= vehicle::find($id);
        return view('Admin.Transport_Management.updateVehicle',compact('vehicles','id'));
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
        $vehicles = vehicle::find($id);
        $this->validate(request(), [
            'regNo'=>'numeric',
            'regOwner'=>'required',
            'address'=>'required',
            'Mfg'=>'numeric',
            'chassisNo'=>'numeric',
            'seating_Capacity'=>'numeric',
            'wheelBase'=>'numeric',
            'Regn_Authority'=>'required',
            'Regn_date'=>'numeric',
            'regn_Valid'=>'numeric',
            'fuel'=>'numeric',
            'type_Of_Body'=>'required',
            'vehicle_Class'=>'numeric',
            'engineNo'=>'numeric',
            'tax'=>'numeric',
            'colour'=>'required'

        ]);

        $vehicles->regNo = $request->get('regNo');
        $vehicles->regOwner = $request->get('regOwner');
        $vehicles->address = $request->get('address');
        $vehicles->Mfg = $request->get('Mfg');
        $vehicles->chassisNo = $request->get('chassisNo');
        $vehicles->seating_Capacity = $request->get('seating_Capacity');
        $vehicles->wheelBase = $request->get('wheelBase');
        $vehicles->Regn_Authority = $request->get('Regn_Authority');
        $vehicles->Regn_date = $request->get('Regn_date');
        $vehicles->regn_Valid = $request->get('regn_Valid');
        $vehicles->fuel = $request->get('fuel');
        $vehicles->type_Of_Body = $request->get('type_Of_Body');
        $vehicles->vehicle_Class = $request->get('vehicle_Class');
        $vehicles->engineNo = $request->get('engineNo');
        $vehicles->tax = $request->get('tax');
        $vehicles->colour = $request->get('colour');




        $vehicles->save();
        return redirect('vehicles')->with('success','Vehicle has been updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $vehicles = vehicle::find($id);
        $vehicles->delete();
        return redirect('vehicles')->with('success','Vehicle has been  deleted');
    }





















}
