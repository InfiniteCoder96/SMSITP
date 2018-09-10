<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\sport_categories;

class sports_categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = sport_categories::all()->toArray();
        return view('Admin.Non_Academic_Management.manage_sports', compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sports_categories.create');  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sport_categories = $this->validate(request(),[
            'sports_id' => 'required|numeric|min:1|max:200',
            'sports_name' => 'required',
            'coach_id'=>'required|numeric|min:1|max:100',
            'teacher_in_charge_id'=>'required|numeric|min:1|max:400'
        ]);
       sport_categories::create($sport_categories);
        return back()->with('success', 'sports has been added');
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
    public function edit($sports_id)
    {
        $sport_categories = sport_categories::find($sports_id);
        return view('Admin.Non_Academic_Management.update_sports',compact('sport_categories','sports_id'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sports_id)
    {
        $sport_categories = sport_categories::find($sports_id);
        $this->validate(request(), [
            'sports_id' => 'required|numeric|min:1|max:200',
            'sports_name' => 'required',
            'coach_id'=>'required|numeric|min:1|max:100',
            'teacher_in_charge_id'=>'required|numeric|min:1|max:400'
        ]);
        $sport_categories->sports_id = $request->get('sports_id');
        $sport_categories->sports_name = $request->get('sports_name');
        $sport_categories->coach_id = $request->get('coach_id');
        $sport_categories->teacher_in_charge_id = $request->get('teacher_in_charge_id');
        $sport_categories->save();
        return redirect('sports_categories')->with('success','sport has been updated');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sports_id)
    {

        $sport_categories = sport_categories::find($sports_id);
        $sport_categories->delete();
        return redirect('sports_categories')->with('success','sport has been  deleted');
        //
    }
}
