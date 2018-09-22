<?php

namespace App\Http\Controllers;

use foo\bar;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Result;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use PDF;


class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $Results = Result::all()->toArray();
     $Results = Result::with('studentF')->orderBy('sId', 'asc')->orderBy('examId', 'asc')->get();
     return view('Admin.Exam_Centre_Management.viewResults',compact('Results'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        $grade = $this->validate(request(),[
           'grade' => 'required',
            'sId' => 'required',
        ]);

        $year = Input::get('grade');//1,2

        //get the class id  of the student
        $classId = DB::table('studentclasses')->where('id', '=',$request->sId)->pluck('classId'); //CLG01ID1

       //get the grade of the class id
        $Grade = DB::table('allclasses')->where('id', '=', $classId)->where('grade','=',$year)->get();//1,2

        //check student is registered or not
        $check = DB::table('studs')->where('id', $request->sId)->get();

        //get subjects for the grade*******
        $classId1 = DB::table('studentclasses')->where('id', '=',$request->sId)->pluck('classId');//CLG01ID1

        if (strpos($classId1, "0") == true ) {
            $gradeNew = '0'.$year;
        }
        else{
            $gradeNew = $year;
        }

        $subjects = DB::table('subjects')->where('subjectId','LIKE','SBG'.'%'.$gradeNew.'C'.'%')->pluck('subjectName');

        if ($check->isEmpty()){
            return back()->with('fail', 'Not a registered student. Please enter a valid student ID');
        }
        //checking grade
        elseif (($Grade->isEmpty())){
                return back()->with('fail', 'Student is not in this grade');
        }
        else {
            $searchResults = DB::table('results')->where('sId', $request->sId)->orderBy('examId', 'asc')->get();
            return view('Admin.Exam_Centre_Management.publishResults', compact('grade'))->with(compact('searchResults'))->with(compact('subjects'));
        }
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
            'marks' => 'required|numeric|between:0,100',
            'examId' => 'required',
            'subject' => 'required'
        ]);

        $sId = $request->get('sId');
        $examId = $request->get('examId');
        $subject = $request->get('subject');

        if(Result::where('sId','=', $sId)->where('examId','=',$examId)->where('subject','=',$subject)->exists()) {
            return back()->with('fail', 'Results are already in the system');
        }
        else{
            Result::create($result);
            return back()->with('success', 'Results have been added');
        }

//        $result = new Result();
//        $result->save();
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
        return view('Admin.Exam_Centre_Management.updateResults',compact('result'));
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
        $result = Result::find($id);

        $this->validate(request(),[
            'sId' => 'required',
            'marks' => 'required|numeric|between:0,100',
            'examId' => 'required',
            'subject' => 'required'
        ]);

        $result->sId = $request->get('sId');
        $result->examId = $request->get('examId');
        $result->subject = $request->get('subject');
        $result->marks = $request->get('marks');
        $result->save();
        return redirect('search')->with('success', 'Results have been updated');
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

    public function search(Request $request)
    {
        $serachFor = $request->key;

        $Results = Result::with('studentF')
            ->where('examID',$serachFor)
            ->orWhere('sId',$serachFor)
            ->orWhere('subject','LIKE','%'.$serachFor.'%')
            ->orderBy('examId', 'asc')->get();

        if($request->has('key')){
            return view('Admin.Exam_Centre_Management.viewResults', compact('Results'));
        }
        else{
            return  view('Admin.Exam_Centre_Management.viewResults',compact('Results'))->with('fail', 'No results were found');
        }
    }

    public function searchBySId(Request $request)
    {
        $sId = $request->sId;
        $examId = $request->examId;

//        return view('Admin.Exam_Centre_Management.studentsResults');

        if($request->has('sId','examId')) {
            $Results1 = Result::with('studentF')->where('sId', $request->sId)->where('examId', $request->examId)->get();
            return view('Admin.Exam_Centre_Management.studentsResults')->with(compact('Results1','sId','examId'));
        }else{
            $Results1 = null;
            return view('Admin.Exam_Centre_Management.studentsResults', compact('Results1'));
        }
    }

    public function downloadPdf(Request $request)
    {
        $this->validate(request(),[
            'examId' => 'required',
        ]);

        $sId = $request->sId;
        $examId = $request->examId;
        $fname = DB::table('studs')->where('id',$sId)->pluck('name');

        $Datas = DB::table('results')->where('sId',$sId)->where('examId',$examId)->orderBy('examId','asc')->get();
        $total = DB::table('results')->where('sId', $request->sId)->where('examId', $request->examId)->sum('marks');

        $count=0;
        $avg = 0;

        $a = str_after($examId,"G");
        $b = str_before($a,"T");

            $count = DB::table('subjects')->where('subjectId','LIKE','SB'.'%'.$b.'C'.'%')->count();

            if($count != 0 ){
                $avg = $total/$count;
            }

        if($request->has('sId','examId') and $total != 0) {
            $pdf = PDF::loadView('Admin.Exam_Centre_Management.reports', compact('Datas', 'total', 'avg', 'sId', 'examId', 'fname','count'));
            return $pdf->download('reports.pdf');
        }
       else
           return back()->with('fail','No results were found');

    }

}
