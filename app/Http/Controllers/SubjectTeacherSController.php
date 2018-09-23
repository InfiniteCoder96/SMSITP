<?php

namespace App\Http\Controllers;

use App\SubjectS;
use App\SubjectTeacherS;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TeacherS;


class SubjectTeacherSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $SubjectTeacherSes=SubjectTeacherS::with('SubjectSR')->orderBy('SubjectID','asc')->get();
        $TeacherSes=TeacherS::paginate(3);
        //$TeacherSes=TeacherS::orderBy('TeacherID')->orderBy('TeacherName')->orderBy('Qualifications')->get()->paginate(2);
        return view('Admin.Academic_Management.manage_subject_teacher')->with(compact('SubjectTeacherSes'))->with(compact('TeacherSes'));
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
//    public function store(Request $request)
//    {
//        //
//        $SubjectTeacherSS=$this->validate(request(),[
//            'SubjectID'=>'required',
//            'SubjectName'=>'required',
//            'Range'=>'required',
//            'SubjectTeacherID'=>'required',
//            'SubjectTeacherName'=>'required'
//        ]);
//
//
//        SubjectTeacherS::create($SubjectTeacherSS);
//
//        return back()->with('success','Subject teacher has been added');
//    }

    public function store(Request $request)
    {
        $SubjectTeacherSS = new SubjectTeacherS();
        $SubjectTeacherFC = new SubjectS();

        $this->validate(request(), [
            'SubjectID'=>'required|min:1|max:8',
            'SubjectName'=>'required',
            'Range'=>'required',
            'SubjectTeacherID'=>'required|min:1|max:8',
            'SubjectTeacherName'=>'required'
        ]);

        $SubjectTeacherSS->SubjectID = $request->get('SubjectID');
        $SubjectTeacherSS->SubjectName = $request->get('SubjectName');
        $SubjectTeacherSS->Range = $request->get('Range');
        $SubjectTeacherSS->SubjectTeacherID = $request->get('SubjectTeacherID');
        $SubjectTeacherSS->SubjectTeacherName = $request->get('SubjectTeacherName');
//
        $SubjectTeacherSS->save();

        $SubjectTeacherFC = SubjectS::find($request->get('SubjectID'));

        if ($SubjectTeacherFC == null) {

            return redirect('/Aadmin/SubjectTeacherS')->with('fail', 'Error..');
        }
        else {
//            $FID=ClassS::where('ClassID','=',$ClassTeacherSS->ClassID)->pluck('id');
//
//            $ClassTeacherFC=ClassS::find($FID);

            $SubjectTeacherFC->SubjectTeacherID = $request->get('SubjectTeacherID');
            $SubjectTeacherFC->SubjectTeacherName = $request->get('SubjectTeacherName');

            $SubjectTeacherFC->save();

            return redirect('/Aadmin/SubjectTeacherS')->with('success', 'Subject Teacher has been added to subject table');
        }

//        return $ClassTeacherFC;
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
        $SubjectTeacherSE=SubjectTeacherS::find($id);
        return view('Admin.Academic_Management.update_subject_teacher',compact('SubjectTeacherSE','id'));
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
        $SubjectTeacherSU = SubjectTeacherS::find($id);
        $this->validate(request(), [
            'SubjectID'=>'required|min:1|max:8',
            'SubjectName'=>'required',
            'Range'=>'required',
            'SubjectTeacherID'=>'required|min:1|max:8',
            'SubjectTeacherName'=>'required'
        ]);

        $SubjectTeacherSU->SubjectID = $request->get('SubjectID');
        $SubjectTeacherSU->SubjectName = $request->get('SubjectName');
        $SubjectTeacherSU->Range = $request->get('Range');
        $SubjectTeacherSU->SubjectTeacherID = $request->get('SubjectTeacherID');
        $SubjectTeacherSU->SubjectTeacherName = $request->get('SubjectTeacherName');

        $SubjectTeacherSU->save();
        return redirect('/Aadmin/SubjectTeacherS')->with('success','Subject Teacher has been updated');
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
        $SubjectTeacherSD = SubjectTeacherS::find($id);
        $SubjectTeacherSD->delete();
        return redirect('/Aadmin/SubjectTeacherS')->with('success','Subject Teacher has been deleted');
    }
}
