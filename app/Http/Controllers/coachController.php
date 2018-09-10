<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coaches;

class coachController extends Controller
{

    public function index()
    {
        $categories= coaches::all()->toArray();
        return view('Admin.Non_Academic_Management.manage_coaches', compact('categories'));
        //
    }



    public function create()
    {
        return view('Admin.Non_Academic_Management.manage_coaches.create');  //
    }



    public function store(Request $request)
    {
        $coaches = $this->validate(request(), [
            'coach_id' => 'required|numeric|min:1|max:100',
            'coach_name' => 'required',
            'sport_id'=>'required|numeric|min:1|max:200',
            'approval'=>'required'
        ]);
       coaches::create($coaches);
        return back()->with('success', 'coaches has been added');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($coach_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($coach_id)
    {
        $coaches = coaches::find($coach_id);
        return view('Admin.Non_Academic_Management.update_coaches',compact('coaches','coach_id'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $coach_id)
    {
       $coaches = coaches::find($coach_id);
        $this->validate(request(), [
            'coach_id' => 'required|numeric|min:1|max:100',
            'coach_name' => 'required',
            'sport_id'=>'required|numeric|min:1|max:200',
            'approval'=>'required'
        ]);
       $coaches->coach_id = $request->get('coach_id');
        $coaches->coach_name = $request->get('coach_name');
        $coaches->sport_id = $request->get('sport_id');
        $coaches->approval = $request->get('approval');
        $coaches->save();
        return redirect('coaches')->with('success','coach has been updated');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($coach_id)
    {

        $coaches = coaches::find($coach_id);
        $coaches->delete();
        return redirect('coaches')->with('success','coach has been  deleted');
        //
    }


}
