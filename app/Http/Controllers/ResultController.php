<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Result;


class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Results = Result::all()->toArray();                                        //$results array
        return view('Admin.Exam_Centre_Management.viewResults',compact('Results'));
    }

    public function index1()
    {
        $Results1 = Result::all()->toArray();                                        //$results array
        return view('Admin.Exam_Centre_Management.publishResults',compact('Results1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Exam_Centre_Management.publishResults');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = $this->validate(request(),[
           'sId' => 'required',
            'marks' => 'required|numeric',
            'examId' => 'required',
            'subject' => 'required'
        ]);

        Result::create($result);//constructor

        return back()->with('success', 'Results have been added');
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
        $result = Result::find($id);
        return view('layouts.ExamCentreLayouts.updateResultsmodal',compact('result','id'));
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
        $result = Result::find($request->get('id'));

        $result = Result::find($id);
        $this->validate(request(),[
            'sId' => 'required',
            'marks' => 'required|numeric',
            'examId' => 'required',
            'subject' => 'required'
        ]);

        $result->sId = $request->get('sId');
        $result->examId = $request->get('examId');
        $result->subject = $request->get('subject');
        $result->marks = $request->get('marks');
        $result->save();
        return redirect('results')->with('success', 'Results has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Result::find($id);
        $result->delete();
        return redirect('results')->with('success','Record has been  deleted');
    }
}
