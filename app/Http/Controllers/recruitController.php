<?php

namespace App\Http\Controllers;

use App\Recruit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class recruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recruits = Recruit::all()->toArray();
        return view('Admin.HR_Management.academic_staff', compact('recruits'));
    }

    /**
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
        $recruit = $this->validate(request(),[
            'rid' =>'required',
            'name' =>'required',
            'contact_number' =>'required|numeric',
            'category' =>'required',

        ]);

        Recruit::create($recruit);
        return back()->with('success','Staff member has been added');
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
        $recruit = Recruit::find($id);
        return view('layouts.HRLayouts.updateAcademicStaffDetailsModal',compact('recruit','id'));
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
        $recruit = Recruit::find($request->get('id'));

        $recruit = Recruit::find($id);
        $this->validate(request(),[
            'rid' => 'required',
            'name' => 'required',
            'contact_number' => 'required|numeric',
            'category' => 'required'
        ]);

        $recruit->rid = $request->get('rid');
        $recruit->name = $request->get('name');
        $recruit->contact_number = $request->get('contact_number');
        $recruit->category = $request->get('category');
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
}
