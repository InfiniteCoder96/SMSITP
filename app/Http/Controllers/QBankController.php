<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\qBank;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class QBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qBanks = qBank::all()->toArray();
        return view('Admin.Exam_Centre_Management.questionBank', compact('qBanks'));
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
        $this->validate(request(),[
            'examId' => 'required',
            'subject' => 'required',
            'file' => 'required'
        ]);

        if($request->hasFile('file')){

            $fileName = $request->file->getClientOriginalName();

            $request->file->storeAs('public/uploads',$fileName);

            //return Storage::putFile('public/uploads',$request->file('content'));

            $files = new qBank;
            //column
            $files->examId = $request->examId;
            $files->subject = $request->subject;
            $files->content = $fileName;

            if(qBank::where('examId','=', $request->examId)->where('subject','=',$request->subject)->where('content','=',$fileName)->exists()) {
                return back()->with('fail', 'File exists or provide a different file name');
            }
            else{
                $files->save();
                return back()->with('success', 'File successfully added');
            }
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

        $searchResults = null;
        $status = 'successful';
        $qBank = qBank::find($id);
        $qBank->delete();
        return back()->with('searchResults','status');
    }

    public function searchQBank(Request $request)
    {
        $serachFor = $request->key;

        $searchResults =  DB::table('qbanks')->where('examID','LIKE','%'.$serachFor.'%')->orWhere('subject', 'like', '%' .$serachFor. '%')->get();

        return view('Admin.Exam_Centre_Management.questionBank', compact('searchResults'));
    }

    public function dashboardController(){
        $count = DB::table('qbanks')->count();
        return view('Admin.Exam_Centre_Management.dashboard')->with(compact('count'));
    }



}
