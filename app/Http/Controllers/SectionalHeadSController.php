<?php

namespace App\Http\Controllers;

use App\SectionS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SectionalHeadS;
use App\TeacherS;

class SectionalHeadSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $SectionalHeadSes = SectionalHeadS::orderBy('SectionID','asc')->get();
        $TeacherSes=TeacherS::paginate(3);
        return view('Admin.Academic_Management.manage_sectional_head', compact('SectionalHeadSes'))->with(compact('TeacherSes'));
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
        $SectionalHeadSS=new SectionalHeadS();
        $SectionalHeadSFC = new SectionS();
            $this->validate(request(),[
            'SectionID'=>'required|min:1|max:8',
            'SectionName'=>'required',
            'Grade'=>'required|numeric',
            'SectionalHeadID'=>'required|min:1|max:8',
            'SectionalHeadName'=>'required'
        ]);


        $SectionalHeadSS->SectionID = $request->get('SectionID');
        $SectionalHeadSS->SectionName = $request->get('SectionName');
        $SectionalHeadSS->Grade = $request->get('Grade');
        $SectionalHeadSS->SectionalHeadID = $request->get('SectionalHeadID');
        $SectionalHeadSS->SectionalHeadName = $request->get('SectionalHeadName');
//
        $SectionalHeadSS->save();

        $SectionalHeadSFC = SectionS::find($request->get('SectionID'));

        if ($SectionalHeadSFC == null) {

            return redirect('/Aadmin/SectionalHeadS')->with('fail', 'Error..');
        }
        else {
//            $FID=ClassS::where('ClassID','=',$ClassTeacherSS->ClassID)->pluck('id');
//
//            $ClassTeacherFC=ClassS::find($FID);

            $SectionalHeadSFC->SectionTeacherID = $request->get('SectionalHeadID');
            $SectionalHeadSFC->SectionTeacherName = $request->get('SectionalHeadName');

            $SectionalHeadSFC->save();

            return redirect('/Aadmin/SectionalHeadS')->with('success', 'Sectional head has been added to section table');
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
        $SectionalHeadSE = SectionalHeadS::find($id);
        return view('Admin.Academic_Management.update_sectional_heads',compact('SectionalHeadSE','id'));
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
        $SectionalHeadSU = SectionalHeadS::find($id);
        $this->validate(request(), [
            'SectionID'=>'required',
            'SectionName'=>'required',
            'Grade'=>'required|numeric',
            'SectionalHeadID'=>'required',
            'SectionalHeadName'=>'required'
        ]);

        $SectionalHeadSU->SectionID = $request->get('SectionID');
        $SectionalHeadSU->SectionName = $request->get('SectionName');
        $SectionalHeadSU->Grade = $request->get('Grade');
        $SectionalHeadSU->SectionalHeadID = $request->get('SectionalHeadID');
        $SectionalHeadSU->SectionalHeadName = $request->get('SectionalHeadName');
        $SectionalHeadSU->save();
        return redirect('/Aadmin/SectionalHeadS')->with('success','Sectional Head has been updated');
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
        $SectionalHeadSD = SectionalHeadS::find($id);
        $SectionalHeadSD->delete();
        return redirect('/Aadmin/SectionalHeadS')->with('success','Sectional Head has been  deleted');
    }
}
