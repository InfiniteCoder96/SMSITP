<?php

namespace App\Http\Controllers;

use App\achivement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class achivementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = achivement::all()->toArray();
        return view('Admin.Non_Academic_Management.manage_achivements', compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('Admin.Non_Academic_Management.manage_achivements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $achivement = $this->validate(request(), [
            'sport_id' => 'required',
            'sport_name' => 'required',
            'coach_id'=>'required|unique:achivements',
            'achivement'=>'required|unique:achivements'
        ]);
       achivement::create($achivement);
        return back()->with('success', 'Achievement has been added');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($sport_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sport_id)
    {

        $achivements =achivement::find($sport_id);
        return view('Admin.Non_Academic_Management.update_achivements',compact('achivements','sport_id'));
        //
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sport_id)
    {
        $achivement = achivement::find($sport_id);
        $this->validate(request(), [
            'sport_id' => 'required',
            'sport_name' => 'required',
            'coach_id'=>'required|unique:achivements',
            'achivement'=>'required|unique:achivements'
        ]);
        $achivement->sport_id= $request->get('sport_id');
        $achivement->sport_name = $request->get('sport_name');
        $achivement->coach_id = $request->get('coach_id');
        $achivement->achivement = $request->get('achivement');
        $achivement->save();
        return redirect('achivements')->with('success','Achievement has been updated');
        //
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sport_id)
    {
        $achivement = achivement::find($sport_id);
        $achivement->delete();
        return redirect('achivements')->with('success','Achievement has been  deleted');
        //
    }
}
