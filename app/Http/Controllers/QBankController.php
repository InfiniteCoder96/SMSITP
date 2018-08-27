<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\qBank;
use Illuminate\Support\Facades\Storage;

class QBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Questions = qBank::all()->toArray();                                        //array
        return view('Admin.Exam_Centre_Management.questionBank',compact('Questions'));

        //return Storage::files('uploads');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Exam_Centre_Management.questionBank');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('file')){

            $fileName = $request->file->getClientOriginalName();

            $request->file->storeAs('public/uploads',$fileName);//public folder in storage folder

            //return Storage::putFile('public/uploads',$request->file('content'));

            $files = new qBank;
                    //column name
            $files->examId = $request->examId;
            $files->subject = $request->subject;
            $files->content = $fileName;
            $files->save();

            return back()->with('success', 'File has been added');

        }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qBank = qBank::find($id);
        $qBank->delete();
        return redirect('qBanks')->with('success','Record has been  deleted');
    }
}
