<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SectionS;


class SectionSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $SectionSes = SectionS::with('SectionalHeadSR')->orderBy('SectionID','asc')->get();
        return view('Admin.Academic_Management.manage_section', compact('SectionSes'));
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
        $SectionSS =new SectionS();

            $this->validate(request(), [
            'Grade' => 'required|numeric',
            'SectionName' => 'required',
            'NoOfClasses' => 'required|numeric',
            'NoOfStudents' => 'required|numeric'
        ]);

        if(SectionS::where('SectionID','=',$request->SectionID)->exists()){
            return redirect('/Aadmin/SectionS')->with('fail','Section ID exists. Provide unique Section ID');
        }

        else{
            $SectionSS->Grade = $request->get('Grade');

            $ScID =  $this->SectionIDGenerator($SectionSS->Grade);

            $SectionSS->SectionID = $ScID;
            $SectionSS->SectionName = $request->get('SectionName');
            $SectionSS->NoOfClasses = $request->get('NoOfClasses');
            $SectionSS->NoOfStudents = $request->get('NoOfStudents');
            $SectionSS->save();


            return redirect('/Aadmin/SectionS')->with('success', 'Section has been added');

        }

    }

    public function SectionIDGenerator($Grade){
        //$Grade = '03';
        $SectionSes = SectionS::all();

        $last_ID = null;

        $idVal = 0;

        $IDFirstP='SCG'.$Grade.'ID';

        foreach ($SectionSes as $sectionS){

            $last_ID = $sectionS->SectionID;
            $Sc = substr($last_ID,0,7);

            if(strval($IDFirstP) == strval($Sc)){
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
    public function edit($SectionID)
    {
        //
        $SectionSE = SectionS::find($SectionID);
        return view('Admin.Academic_Management.update_section',compact('SectionSE','SectionID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $SectionID)
    {
        //
        $SectionSU = SectionS::find($SectionID);
        $this->validate(request(), [
            'SectionName' => 'required',
            'Grade' => 'required',
            'NoOfClasses' => 'required',
            'NoOfStudents' => 'required'
        ]);

        $SectionSU->Grade = $request->get('Grade');

        $ScID =  $this->SectionIDGenerator($SectionSU->Grade);
        $SectionSU->SectionID =$ScID;

        $SectionSU->SectionName = $request->get('SectionName');
        $SectionSU->Grade = $request->get('Grade');
        $SectionSU->NoOfClasses = $request->get('NoOfClasses');
        $SectionSU->NoOfStudents = $request->get('NoOfStudents');

        $SectionSU->save();
        return redirect('/Aadmin/SectionS')->with('success','Section has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $SectionSD = SectionS::find($id);
        $SectionSD->delete();
        return redirect('/Aadmin/SectionS')->with('success','Section has been deleted');
    }
}
