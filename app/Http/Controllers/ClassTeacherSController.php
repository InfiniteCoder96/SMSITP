<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ClassTeacherS;
use App\ClassS;
use function PhpParser\filesInDir;
use App\TeacherS;


class ClassTeacherSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ClassTeacherSes= ClassTeacherS::with('ClassSR')->orderBy('ClassID','asc')->get();
        $TeacherSes=TeacherS::paginate(3);
//       $TeacherSes=TeacherS::orderBy('TeacherID','asc')->orderBy('TeacherName')->orderBy('Qualifications')->get();

        return view('Admin.Academic_Management.manage_class_teacher',compact('ClassTeacherSes'))->with(compact('TeacherSes'));
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
//        $ClassTeacherSS=$this->validate(request(),[
//            'ClassID'=>'required|min:1|max:8',
//            'ClassName'=>'required',
//            'ClassTeacherID'=>'required|min:1|max:8',
//            'ClassTeacherName'=>'required',
//            'Subject'=>'required'
//        ]);
//
//        ClassTeacherS::create($ClassTeacherSS);
//
//        return redirect('/Aadmin/ClassTeacherS')->with('success', 'Class Teacher has been added');
//
//
//    }

    public function FindClassT($classTeacherID,$ClassID,$ClassTeacherName){




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

        $ClassTeacherSE = ClassTeacherS::find($id);
        return view('Admin.Academic_Management.update_class_teacher',compact('ClassTeacherSE','id'));
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
        $ClassTeacherSU=ClassTeacherS::find($id);
        $this->validate(request(),[
            'ClassID'=>'required|numeric',
            'ClassName'=>'required',
            'ClassTeacherID'=>'required',
            'ClassTeacherName'=>'required',
            'Subject'=>'required'

        ]);

        $ClassTeacherSU->ClassID=$request->get('ClassID');
        $ClassTeacherSU->ClassName=$request->get('ClassName');
        $ClassTeacherSU->ClassTeacherID=$request->get('ClassTeacherID');
        $ClassTeacherSU->ClassTeacherName=$request->get('ClassTeacherName');
        $ClassTeacherSU->Subject=$request->get('Subject');
        $ClassTeacherSU->save();

        return redirect('/Aadmin/ClassTeacherS ')->with('success','Class Teacher has been updated');
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
        $ClassTeacherSD = ClassTeacherS::find($id);
        $ClassTeacherSD->delete();
        return redirect('/Aadmin/ClassTeacherS')->with('success','Class Teacher has been deleted');
    }

    public function store(Request $request)
    {
        $ClassTeacherSS = new ClassTeacherS();
        $ClassTeacherFC = new ClassS();

        $this->validate(request(), [
            'ClassID' => 'required|min:1|max:8',
            'ClassName' => 'required',
            'ClassTeacherID' => 'required|min:1|max:8',
            'ClassTeacherName' => 'required',
            'Subject' => 'required'
        ]);

        $ClassTeacherSS->ClassID = $request->get('ClassID');
        $ClassTeacherSS->ClassName = $request->get('ClassName');
        $ClassTeacherSS->ClassTeacherID = $request->get('ClassTeacherID');
        $ClassTeacherSS->ClassTeacherName = $request->get('ClassTeacherName');
        $ClassTeacherSS->Subject = $request->get('Subject');
//
//        $chk1=ClassTeacherS::where('ClassID','=',$ClassTeacherSS->ClassID)->pluck('ClassTeacherID');

//        if ($chk1->isEmpty()) {
            $ClassTeacherSS->save();
//        }
//        else{
//            return redirect('/Aadmin/ClassTeacherS')->with('fail', 'Error..');
//        }
//        $chk2=ClassS::where('ClassID','=',$ClassTeacherSS->ClassID)->pluck('ClassTeacherID');

//        if ($chk2->isEmpty()) {
        $ClassTeacherFC = ClassS::find($request->get('ClassID'));

            $ClassTeacherFC->ClassTeacherID = $request->get('ClassTeacherID');
            $ClassTeacherFC->ClassTeacherName = $request->get('ClassTeacherName');

            $ClassTeacherFC->save();

            return redirect('/Aadmin/ClassTeacherS')->with('success', 'Class Teacher has been added to class table');


//        } else {
//
////            $FID=ClassS::where('ClassID','=',$ClassTeacherSS->ClassID)->pluck('id');
////
////            $ClassTeacherFC=ClassS::find($FID);
//
//            return redirect('/Aadmin/ClassTeacherS')->with('fail', 'Error..');
//        }
//
//        return $ClassTeacherFC;
    }

//        $ClassTeacherFC=ClassS::find($ClassTeacherSS->id);
//
//
//        $ClassTeacherFC->ClassTeacherID = $request->get('ClassTeacherID');
//        $ClassTeacherFC->ClassTeacherName = $request->get('ClassTeacherName');
//
//        $ClassTeacherFC->save();



//        return redirect('/Aadmin/ClassTeacherS')->with('success', 'Class Teacher has been added');




}

//public function store(Request $request)
//{
//    $ClassTeacherSS = new ClassTeacherS();
//    $ClassTeacherFC = new ClassS();
//
//    $this->validate(request(),[
//        'ClassID'=>'required|min:1|max:8',
//        'ClassName'=>'required',
//        'ClassTeacherID'=>'required|min:1|max:8',
//        'ClassTeacherName'=>'required',
//        'Subject'=>'required'
//    ]);
//
//    $ClassTeacherSS->ClassID=$request->get('ClassID');
//    $ClassTeacherSS->ClassName=$request->get('ClassName');
//    $ClassTeacherSS->ClassTeacherID=$request->get('ClassTeacherID');
//    $ClassTeacherSS->ClassTeacherName=$request->get('ClassTeacherName');
//    $ClassTeacherSS->Subject=$request->get('Subject');
//
//    $ClassTeacherSS->save();
//
//    $chk=ClassS::where('ClassID','=',$ClassTeacherSS->ClassID);
//
////        if($chk ->isEmpty())){
//
////            return redirect('/Aadmin/ClassTeacherS')->with('fail','Please provide exists Class ID');
////        }
////        else {
                //
                //    $FID=ClassS::where('ClassID','=',$ClassTeacherSS->ClassID)->pluck('id');
                //
                //    $ClassTeacherFC=ClassS::find($FID);
                //
                //    $ClassTeacherFC->ClassTeacherID = $request->get('ClassTeacherID');
                //    $ClassTeacherFC->ClassTeacherName = $request->get('ClassTeacherName');
                //
                //    ClassS::create($ClassTeacherFC);
                //
                //    return redirect('/Aadmin/ClassTeacherS')->with('success', 'Class Teacher has been added to class table');
////        }
//
////        $ClassTeacherFC=ClassS::find($ClassTeacherSS->id);
////
////
////        $ClassTeacherFC->ClassTeacherID = $request->get('ClassTeacherID');
////        $ClassTeacherFC->ClassTeacherName = $request->get('ClassTeacherName');
////
////        $ClassTeacherFC->save();
//
//
//
////        return redirect('/Aadmin/ClassTeacherS')->with('success', 'Class Teacher has been added');
//
//
//}


//public function store(Request $request)
//{
////        $ClassTeacherSS = new ClassTeacherS();
////        $ClassTeacherFC = new ClassS();
//
//    $ClassTeacherFC=null;
////        $ClassTeacherSS =null;
//
//    $ClassTeacherSS=$this->validate(request(),[
//        'ClassID'=>'required|min:1|max:8',
//        'ClassName'=>'required',
//        'ClassTeacherID'=>'required|min:1|max:8',
//        'ClassTeacherName'=>'required',
//        'Subject'=>'required'
//    ]);
//
//    $ClassTeacherSS->ClassID=$request->get('ClassID');
//    $ClassTeacherSS->ClassName=$request->get('ClassName');
//    $ClassTeacherSS->ClassTeacherID=$request->get('ClassTeacherID');
//    $ClassTeacherSS->ClassTeacherName=$request->get('ClassTeacherName');
//    $ClassTeacherSS->Subject=$request->get('Subject');
//
//    $ClassTeacherSS->save();
//
//    $chk=ClassS::where('ClassID','=',$request->ClassID)->exists();
//
//    if($chk->isEmpty()){
//
//        return redirect('/Aadmin/ClassTeacherS')->with('fail','Please provide exists Class ID');
//    }
//    else {
//
//        $FID=ClassS::where('ClassID','=',$request->ClassID)->pluck('id');
//
//        $ClassTeacherFC=ClassS::find($FID);
//
//        $ClassTeacherFC->ClassTeacherID = $request->get('ClassTeacherID');
//        $ClassTeacherFC->ClassTeacherName = $request->get('ClassTeacherName');
//
//        $ClassTeacherFC->save();
//
//        return redirect('/Aadmin/ClassTeacherS')->with('success', 'Class Teacher has been added to class table');
//    }
//
////        $ClassTeacherFC=ClassS::find($ClassTeacherSS->id);
////
////
////        $ClassTeacherFC->ClassTeacherID = $request->get('ClassTeacherID');
////        $ClassTeacherFC->ClassTeacherName = $request->get('ClassTeacherName');
////
////        $ClassTeacherFC->save();
//
//
//
////        return redirect('/Aadmin/ClassTeacherS')->with('success', 'Class Teacher has been added');
//
//
//}



