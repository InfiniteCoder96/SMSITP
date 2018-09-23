<?php

namespace App\Http\Controllers;

use App\ClassTeacherS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ClassS;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ClassSes = ClassS::with('ClassTeacherSR')->orderBy('ClassID','asc')->get();

        return view('Admin.Academic_Management.manage_class',compact('ClassSes'));
    }

    public function store(Request $request)
    {
        //
        $ClassSS = new ClassS();

        $this->validate(request(),[
//            'ClassID'=>'required|String|min:1|max:8',
            'Grade'=>'required',
            'ClassName'=>'required',
            'NoOfStudents'=>'required|numeric',
            'Venue'=>'required'

        ]);

        if(ClassS::where('ClassID','=',$request->ClassID)->exists()){
            return redirect('/Aadmin/ClassS')->with('fail','Class ID exists. Provide unique Class ID');
        }

        else {
            $ClassSS->Grade = $request->get('Grade');

            $ClID =  $this->ClassIDGenerator($ClassSS->Grade);

            $ClassSS->ClassID = $ClID;

            $ClassSS->ClassName=$request->get('ClassName');
            $ClassSS->Grade=$request->get('Grade');
            $ClassSS->NoOfStudents=$request->get('NoOfStudents');
            $ClassSS->Venue=$request->get('Venue');

            $ClassSS->save();

            return redirect('/Aadmin/ClassS')->with('success', 'Class has been added');
        }

    }


    public function ClassIDGenerator($Grade){
        //$Grade = '03';
        $ClassSes = ClassS::all();

        $last_ID = null;

        $idVal = 0;

        $IDFirstP='CLG'.$Grade.'ID';

        foreach ($ClassSes as $classS){

            $last_ID = $classS->ClassID;
            $cal = substr($last_ID,0,7);

            if(strval($IDFirstP) == strval($cal)){
                $idVal = $idVal + 1;
            }
        }

        $lastDigits = 0;

        if($last_ID == null){
            $last_ID = $IDFirstP.'1';
        }
        else{
            $lastDigits = $idVal + 1;

            if($lastDigits < 10){
                $IDLastP = $lastDigits;
            }
//            elseif ($lastDigits < 100 || $lastDigits > 10){
//                $IDLastP='0'.$lastDigits;
//            }
//            else{
//                $IDLastP=$lastDigits;
//            }

            $last_ID =$IDFirstP.$IDLastP;

        }

        return $last_ID;

    }

    //        }
//        $CID=$request->get('ClassID');
//
//        $check=ClassS::where('ClassID','=',$request->ClassID)->exists() and ClassS::where('ClassID','NOT LIKE','CD%'.$CID.'%');
//
//        if($check->isEmpty()){
//            ClassS::create($ClassS);
//
//            return redirect('/Aadmin/ClassS')->with('success', 'Class has been added');
////
//        }
//
//        else{
//            return back()->with('fail','Class ID exists. Provide unique Class ID');
//            return redirect('/Aadmin/ClassS')->with('failA', 'Class ID exists. Provide unique Class ID');
//        }


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
     * @param  int  $ID
     * @return \Illuminate\Http\Response
     */
    public function edit($ClassID)
    {
        //
        $ClassE = ClassS::find($ClassID);
        return view('Admin.Academic_Management.update_class',compact('ClassE','ClassID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $ID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ClassID)
    {
        //
        $ClassU=ClassS::find($ClassID);
        $this->validate(request(),[
            'Grade'=>'required',
            'ClassName'=>'required',
            'NoOfStudents'=>'required|numeric',
            'Venue'=>'required'
        ]);

        $ClassU->Grade = $request->get('Grade');

        $ClID =  $this->ClassIDGenerator($ClassU->Grade);
        $ClassU->ClassID =$ClID;

        $ClassU->ClassName=$request->get('ClassName');
        $ClassU->NoOfStudents=$request->get('NoOfStudents');
        $ClassU->Venue=$request->get('Venue');

        $ClassU->save();
        return redirect('/Aadmin/ClassS')->with('success','Class has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $ID
     * @return \Illuminate\Http\Response
     */
    public function destroy($ClassID)
    {
        //
        $ClassD = ClassS::find($ClassID);
        $ClassD->delete();
        return redirect('/Aadmin/ClassS')->with('success','Class has been deleted');
    }


}
