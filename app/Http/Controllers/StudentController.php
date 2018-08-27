<?php

namespace App\Http\Controllers;

use App\Parent_Guardian;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $students = Student::all();
        return view('Admin.User_Management.Student.all_students')->with(compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.User_Management.Student.admission');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = $this->validate(request(), [


            'salutation'=> 'required',
            'first_Name'=> 'required',
            'middle_Name'=> 'required',
            'last_Name'=> 'required',
            'DoB'=> 'required',
            'NIC'=> 'required',
            'Gender'=> 'required',
            'Address'=> 'required',
            'Email_Address'=> 'required|email',
            'Telephone_No_Mob'=> 'required',
            'Telephone_No_Res'=> 'required',
            'birth_certificate_no'=> 'required',
            'religion'=> 'required',
            'race'=> 'required',
            'nationality'=> 'required',
            'blood_group'=> 'required',
            'Known_Illnesses'=> 'required',
            'Known_Allergies'=> 'required',
        ]);

        $parent_guardian = $this->validate(request(), [
            'role'=> 'required',
            'first_name'=> 'required',
            'middle_name'=> 'required',
            'last_name'=> 'required',
            'NIC_Passport'=> 'required',
            'nationality'=> 'required',
            'race'=> 'required',
            'religion'=> 'required',
            'working_sector'=> 'required',
            'profession'=> 'required',
            'occupation'=> 'required',
            'work_place'=> 'required',
            'email'=> 'required',
            'work_address'=> 'required',
            'work_telephone'=> 'required',
            'telephone_mob'=> 'required',
        ]);

        Student::create($student);
        Parent_Guardian::create($parent_guardian);

        return back()->with('success', 'Product has been added');
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
     * @param  int  $sid
     * @return \Illuminate\Http\Response
     */
    public function edit($sid)
    {
        $student = Student::find($sid);
        return view('Admin.User_Management.Student.edit_student',compact('student','sid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $sid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sid)
    {
        $student = Student::find($sid);
        $this->validate(request(), [
            'salutation'=> 'required',
            'first_Name'=> 'required',
            'middle_Name'=> 'required',
            'last_Name'=> 'required',
            'DoB'=> 'required',
            'NIC'=> 'required',
            'Gender'=> 'required',
            'Address'=> 'required',
            'Email_Address'=> 'required|email',
            'Telephone_No_Mob'=> 'required',
            'Telephone_No_Res'=> 'required',
            'birth_certificate_no'=> 'required',
            'religion'=> 'required',
            'race'=> 'required',
            //'country'=> 'required',
            'nationality'=> 'required',
            //'blood_group'=> 'required',
            'Known_Illnesses'=> 'required',
            'Known_Allergies'=> 'required',
        ]);
        $student->salutation = $request->get('salutation');
        $student->first_Name = $request->get('first_Name');
        $student->middle_Name = $request->get('middle_Name');
        $student->last_Name = $request->get('last_Name');
        $student->DoB = $request->get('DoB');
        $student->NIC = $request->get('NIC');
        $student->Gender = $request->get('Gender');
        $student->Address = $request->get('Address');
        $student->Email_Address = $request->get('Email_Address');
        $student->Telephone_No_Mob = $request->get('Telephone_No_Mob');
        $student->Telephone_No_Res = $request->get('Telephone_No_Res');
        $student->birth_certificate_no = $request->get('birth_certificate_no');
        $student->religion = $request->get('religion');
        $student->race = $request->get('race');
        $student->nationality = $request->get('nationality');
        $student->Known_Illnesses = $request->get('Known_Illnesses');
        $student->Known_Illnesses = $request->get('Known_Allergies');

        $student->save();
        return redirect('students')->with('success','Product has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('students')->with('success','Student has been deleted successfully');
    }
}
