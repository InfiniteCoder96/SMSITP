<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\t_incharge;
use Illuminate\Database\Eloquent\Model;
class t_inchargeController extends Controller
{


    public function index()
    {
        $t_incharges = t_incharge::all()->toArray();
        return view('Admin.Non_Academic_Management.manage_teachers_in_charge', compact('t_incharges'));
        //
    }

    public function create()
    {
        return view('Admin.Non_Academic_Management.manage_teachers_in_charge.create');  //
    }


    public function store(Request $request)
    {
        $t_incharge = $this->validate(request(), [
            'teacher_id' => 'required|numeric|min:1|max:400',
            'teacher_name' => 'required',
            'sport_id'=>'required|numeric|min:1|max:200',
            'o_docs'=>'required'
        ]);
        t_incharge::create($t_incharge);
        return back()->with('success', 'teacher has been added');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($teacher_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($teacher_id)
    {
        $t_incharge = t_incharge::find($teacher_id);
        return view('Admin.Non_Academic_Management.update_teachers-in-charge',compact('t_incharge','teacher_id'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $teacher_id)
    {
        $t_incharge = t_incharge::find($teacher_id);
        $this->validate(request(), [
            'teacher_id' => 'required|numeric|min:1|max:400',
            'teacher_name' => 'required',
            'sport_id'=>'required|numeric|min:1|max:200',
            'o_docs'=>'required'
        ]);
        $t_incharge->teacher_id = $request->get('teacher_id');
        $t_incharge->teacher_name = $request->get('teacher_name');
        $t_incharge->sport_id = $request->get('sport_id');
        $t_incharge->o_docs = $request->get('o_docs');
        $t_incharge->save();
        return redirect('t_incharges')->with('success','teacher has been updated');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($teacher_id)
    {

        $t_incharge = t_incharge::find($teacher_id);
        $t_incharge->delete();
        return redirect('t_incharges')->with('success','teacher has been  deleted');
        //
    }

//
}
