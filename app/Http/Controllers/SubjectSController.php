<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SubjectS;

class SubjectSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $SubjectSes = SubjectS::with('SubjectTeacherSR')->orderBy('SubjectID','asc')->get();
        return view('Admin.Academic_Management.manage_subject', compact('SubjectSes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $SubjectSS = new SubjectS();

            $this->validate(request(), [
//            'SubjectID' => 'required|min:1|max:8',
            'Grade'=>'required',
            'SubjectName' => 'required',
            'Range' => 'required'
        ]);

        if(SubjectS::where('SubjectID','=',$request->SubjectID)->exists()){
            return redirect('/Aadmin/SubjectS')->with('fail','Subject ID exists. Provide unique Subject ID');
        }

        else{
            $SubjectSS->Grade = $request->get('Grade');

            $SbID =  $this->SubjectIDGenerator($SubjectSS->Grade);

            $SubjectSS->SubjectID = $SbID;
            $SubjectSS->SubjectName = $request->get('SubjectName');
            $SubjectSS->Range = $request->get('Range');
            $SubjectSS->save();

//            SubjectS::create($SubjectSS);

            return redirect('/Aadmin/SubjectS')->with('success', 'Subject has been added');

        }
    }

    public function SubjectIDGenerator($Grade){
        //$Grade = '03';
        $Subjects = SubjectS::all();

        $last_ID = null;

        $idVal = 0;

        $IDFirstP='SBG'.$Grade.'C';

        foreach ($Subjects as $subject){

            $last_ID = $subject->SubjectID;
            $sub = substr($last_ID,0,6);

            //substr($last_ID,5),$IDFirstP) == 0
            if(strval($IDFirstP) == strval($sub)){
                $idVal = $idVal + 1;
            }
        }

        $lastDigits = 0;

        if($last_ID == null){
            $last_ID = $IDFirstP.'01';
        }
        else{

            $lastDigits = $idVal + 1;

            if($lastDigits < 10){
                $IDLastP = '0'.$lastDigits;
            }
//            elseif ($lastDigits < 100 || $lastDigits > 10){
//                $IDLastP='0'.$lastDigits;
//            }
            else{
                $IDLastP=$lastDigits;
            }

            $last_ID =$IDFirstP.$IDLastP;

        }

        return $last_ID;

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
    public function edit($SubjectID)
    {
        //
        $SubjectSE = SubjectS::find($SubjectID);
        return view('Admin.Academic_Management.update_subject',compact('SubjectSE','SubjectID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $SubjectID)
    {
        //
        $SubjectSU = SubjectS::find($SubjectID);
        $this->validate(request(), [
            'Grade'=>'required',
            'SubjectName' => 'required',
            'Range' => 'required'
        ]);

        $SubjectSU->Grade = $request->get('Grade');

        $SbID =  $this->SubjectIDGenerator($SubjectSU->Grade);
        $SubjectSU->SubjectID =$SbID;
        $SubjectSU->SubjectName = $request->get('SubjectName');
        $SubjectSU->Range = $request->get('Range');
        $SubjectSU->save();

        return redirect('/Aadmin/SubjectS')->with('success','Subject has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($SubjectID)
    {
        //
        $SubjectSD = SubjectS::find($SubjectID);
        $SubjectSD->delete();
        return redirect('/Aadmin/SubjectS')->with('success','Subject has been  deleted');
    }
}
