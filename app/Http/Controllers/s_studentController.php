<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\s_student;
use Laravel\Scout\Searchable;

class s_studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = s_student::all()->toArray();
        return view('Admin.Non_Academic_Management.manage_sport_students', compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Non_Academic_Management.manage_sport_students.create');  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $s_student = $this->validate(request(), [
            'student_id' => 'required|numeric|min:2000|max:5000',
            'student_name' => 'required',
            'sport_id'=>'required|numeric|min:1|max:200',
            'approval'=>'required'
        ]);
        s_student::create($s_student);
        return back()->with('success', 'students has been added');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($student_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($student_id)
    {
        $s_student = s_student::find($student_id);
        return view('Admin.Non_Academic_Management.update_student',compact('s_student','student_id'));
        //
    }

    public function search(Request $request )
    {
        $searchKey = $request->get('search_student');
        $s_student = s_student::search($searchKey)->raw();
//       return view('Admin.Non_Academic_Management.manage_sport_students',compact('s_student'));

        return $s_student;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $student_id)
    {

        $s_student = s_student::find($student_id);

        $this->validate(request(), [
            'student_id' => 'required|numeric|min:2000|max:5000',
            'student_name' => 'required',
            'sport_id'=>'required|numeric|min:1|max:200',
            'approval'=>'required'
        ]);

        $s_student->student_id = $request->get('student_id');
        $s_student->student_name = $request->get('student_name');
        $s_student->sport_id = $request->get('sport_id');
        $s_student->approval = $request->get('approval');
        $s_student->save();

        return redirect('s_students')->with('success','student has been updated');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($student_id)
    {

        $s_student = s_student::find($student_id);
        $s_student->delete();
        return redirect('s_students')->with('success','student has been  deleted');
        //
    }
}
