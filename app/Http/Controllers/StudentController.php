<?php

namespace App\Http\Controllers;

use App\Parent_Guardian;
use App\Student;
use App\TemporaryStudent;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Milon\Barcode\DNS1D;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $students = Student::with('Parent_Guardian')->get();

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
        $temp_sid = $request->get('temp_sid');

        $temporary_student = TemporaryStudent::with('Temporary_Parent_Guardian')->find($temp_sid);
        $temporary_parent = $temporary_student->Temporary_Parent_Guardian;

        $registered_parents = Parent_Guardian::all();

        $parent_status = true;
        $parent_id = null;

        foreach ($registered_parents as $registered_parent){
            $registered_parent_nic = $registered_parent->NIC_Passport;
            $temporary_parent_nic = $temporary_parent->NIC_Passport;

            if($registered_parent_nic == $temporary_parent_nic){
                $parent_status = false;
                $parent_id = $registered_parent->prId;
            }
        }

        $student = new Student();
        $parent_guardian = new Parent_Guardian();

        $prId = $this->parent_id_generator();
        $sid = $this->student_id_generator(random_int(1,13));

        $student->sid =  $sid;

        if($parent_status){
            $student->parent_Id =  $prId;
        }
        else{
            $student->parent_Id =  $parent_id;
        }


        $student->salutation = $temporary_student->salutation;
        $student->first_Name = $temporary_student->first_Name;
        $student->middle_Name = $temporary_student->middle_Name;
        $student->last_Name = $temporary_student->last_Name;
        $student->DoB = $temporary_student->DoB;
        $student->NIC = $temporary_student->NIC;
        $student->Gender = $temporary_student->Gender;
        $student->Address = $temporary_student->Address;
        $student->Email_Address = $temporary_student->Email_Address;
        $student->Telephone_No_Mob = $temporary_student->Telephone_No_Mob;
        $student->Telephone_No_Res = $temporary_student->Telephone_No_Res;
        $student->religion = $temporary_student->religion;
        $student->race = $temporary_student->race;
        $student->nationality = $temporary_student->nationality;
        $student->Known_Illnesses = $temporary_student->Known_Illnesses;
        $student->Known_Allergies = $temporary_student->Known_Allergies;
        $student->blood_group = $temporary_student->blood_group;
        $student->image = $temporary_student->image;

        if($parent_status){

            $parent_guardian->prId = $prId;
            $parent_guardian->role = $temporary_parent->role;
            $parent_guardian->first_name = $temporary_parent->first_name;
            $parent_guardian->middle_name = $temporary_parent->middle_name;
            $parent_guardian->last_name = $temporary_parent->last_name;
            $parent_guardian->NIC_Passport = $temporary_parent->NIC_Passport;
            $parent_guardian->nationality = $temporary_parent->nationality;
            $parent_guardian->race = $temporary_parent->race;
            $parent_guardian->religion = $temporary_parent->religion;
            $parent_guardian->working_sector = $temporary_parent->working_sector;
            $parent_guardian->profession = $temporary_parent->profession;
            $parent_guardian->occupation = $temporary_parent->occupation;
            $parent_guardian->work_place = $temporary_parent->work_place;
            $parent_guardian->email = $temporary_parent->email;
            $parent_guardian->work_address = $temporary_parent->work_address;
            $parent_guardian->work_telephone = $temporary_parent->work_telephone;
            $parent_guardian->telephone_mob = $temporary_parent->telephone_mob;
            $parent_guardian->child_id = $sid;

            $parent_guardian->save();
        }

        $student->save();

        if($temporary_parent->temporary_student->count() < 2){
            $temporary_parent->delete();
        }

        $temporary_student->delete();

        return redirect('/printID/'.$sid);

    }

    public function Demo_store()
    {
        $parents = Parent_Guardian::all();

        $prId = null;

        $prId = $this->parent_id_generator();

        $student = new Student();

        $parent_guardian = new Parent_Guardian();
        $parent_ID = true;


            foreach ($parents as $parent){
                $NIC_Passport = $parent->NIC_Passport;

                if($NIC_Passport=="962571603v"){
                    $student->parent_Id = $parent->prId;
                    $parent_ID = false;

                }


            }


        $class = random_int(1,13);
        $stdID =  $this->student_id_generator($class);

        if($parent_ID){
            $student->parent_Id = (string)$prId;

            $parent_guardian->prId = strval($prId);
            $parent_guardian->role = 'Father';
            $parent_guardian->first_name = 'Hasitha';
            $parent_guardian->middle_name = 'Gayan';
            $parent_guardian->last_name = 'Gunawardane';
            $parent_guardian->NIC_Passport = '962573603v';
            $parent_guardian->nationality = 'Sinhalease';
            $parent_guardian->race = 'Sinhala';
            $parent_guardian->religion = 'Buddhist';
            $parent_guardian->working_sector = 'Government';
            $parent_guardian->profession = 'Docter';
            $parent_guardian->occupation = '-';
            $parent_guardian->work_place = '-';
            $parent_guardian->email = str_random(9).'@gmail.com';
            $parent_guardian->work_address = '-';
            $parent_guardian->work_telephone = '0112847519';
            $parent_guardian->telephone_mob = '0711394878';
            $parent_guardian->child_id = $stdID;


            $parent_guardian->save();
        }




        $student->sid =  $stdID;
        $student->salutation = 'Master';
        $student->first_Name = 'Nadeesh';
        $student->middle_Name = 'Hasaranga';
        $student->last_Name = 'Kure';
        $student->DoB = '2005-05-18';
        $student->NIC = '962571603v';
        $student->Gender = 'Male';
        $student->Address = '127/3,Kalalgoda,Panadura';
        $student->Email_Address = str_random(9).'@gmail.com';
        $student->Telephone_No_Mob = '0711391848';
        $student->Telephone_No_Res = '0112846019';
        $student->religion = 'Buddhist';
        $student->race = 'Sinhala';
        $student->nationality = 'Sinhalease';
        $student->Known_Illnesses = '-';
        $student->Known_Allergies = '-';
        $student->blood_group = 'A+';






//            $image_path = Input::file(asset('assets/images/users/1.jpg'));
//
//            if($image_path){
//                $extension = $image_path->getClientOriginalExtension();
//
//                $filename = $stdID.'.'.$extension;
//
//                $large_image_path = 'storage/StudentImages/Large/'.$filename;
//                $medium_image_path = 'storage/StudentImages/Medium/'.$filename;
//                $small_image_path = 'storage/StudentImages/Small/'.$filename;
//
//                Image::make($image_path)->save($large_image_path);
//                Image::make($image_path)->resize(600,600)->save($medium_image_path);
//                Image::make($image_path)->resize(300,300)->save($small_image_path);
//
//
//            }
        $student->image = '1.jpg';


        $student->save();





$success = 'Your Application has been submitted successfully';

//        if($request->get('source') == 'admin'){
//            return redirect('/students')->with('success', 'Student has been added to the System Successfully');
//        }
//        elseif ($request->get('source') == 'joinUs'){
         //return view('Frontend.ApplicationFormDownload',compact('stdID','success'));
return $prId;
//        }
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
        $students = null;
        $parents = null;
        return view('Admin.User_Management.Student.edit_student',compact('student','sid', 'students', 'parents'));
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

        $parent_guardian = Parent_Guardian::find($student->parent_Id);

//        $parent_students = $parent_guardian->student;
//
//        $student_count = $parent_students->count();
//
//        if($student_count > 1){
//
//            foreach ($parent_students as $parent_student){
//
//                $parent = $parent_student->Parent_Guardian;
//
//                $parent->role = $request->get('role');
//                $parent->first_name = $request->get('first_name');
//                $parent->middle_name = $request->get('middle_name');
//                $parent->last_name = $request->get('last_name');
//                $parent->NIC_Passport = $request->get('Parent_NIC_Passport');
//                $parent->nationality = $request->get('pr_nationality');
//                $parent->race = $request->get('pr_race');
//                $parent->religion = $request->get('pr_religion');
//                $parent->working_sector = $request->get('working_sector');
//                $parent->profession = $request->get('profession');
//                $parent->occupation = $request->get('occupation');
//                $parent->work_place = $request->get('work_place');
//                $parent->email = $request->get('email');
//                $parent->work_address = $request->get('work_address');
//                $parent->work_telephone = $request->get('work_telephone');
//                $parent->telephone_mob = $request->get('telephone_mob');
//                $parent->child_id = $sid;
//
//                $parent->save();
//            }
//
//        }
//        else{

 //       }
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
            'religion'=> 'required',
            'race'=> 'required',
            'nationality'=> 'required',
            'blood_group'=> 'required',
            'Known_Illnesses'=> 'required',
            'Known_Allergies'=> 'required',
            'image' => 'required',

            'role'=> 'required',
            'first_name'=> 'required',
            'middle_name'=> 'required',
            'last_name'=> 'required',
            'Parent_NIC_Passport'=> 'required|min:10|max:10',
            'pr_nationality'=> 'required',
            'pr_race'=> 'required',
            'pr_religion'=> 'required',
            'working_sector'=> 'required',
            'profession'=> 'required',
            'occupation'=> 'required',
            'work_place'=> 'required',
            'email'=> 'required',
            'work_address'=> 'required',
            'work_telephone'=> 'required',
            'telephone_mob'=> 'required',
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
        $student->religion = $request->get('religion');
        $student->race = $request->get('race');
        $student->nationality = $request->get('nationality');
        $student->Known_Illnesses = $request->get('Known_Illnesses');
        $student->Known_Allergies = $request->get('Known_Allergies');
        $student->blood_group = $request->get('blood_group');

        $parent_guardian->role = $request->get('role');
        $parent_guardian->first_name = $request->get('first_name');
        $parent_guardian->middle_name = $request->get('middle_name');
        $parent_guardian->last_name = $request->get('last_name');
        $parent_guardian->NIC_Passport = $request->get('Parent_NIC_Passport');
        $parent_guardian->nationality = $request->get('pr_nationality');
        $parent_guardian->race = $request->get('pr_race');
        $parent_guardian->religion = $request->get('pr_religion');
        $parent_guardian->working_sector = $request->get('working_sector');
        $parent_guardian->profession = $request->get('profession');
        $parent_guardian->occupation = $request->get('occupation');
        $parent_guardian->work_place = $request->get('work_place');
        $parent_guardian->email = $request->get('email');
        $parent_guardian->work_address = $request->get('work_address');
        $parent_guardian->work_telephone = $request->get('work_telephone');
        $parent_guardian->telephone_mob = $request->get('telephone_mob');
        $parent_guardian->child_id = $sid;



            $image_path = Input::file('image');

            if($image_path){
                $extension = $image_path->getClientOriginalExtension();

                $filename = $sid.'.'.$extension;

                $large_image_path = 'storage/StudentImages/Large/'.$filename;
                $medium_image_path = 'storage/StudentImages/Medium/'.$filename;
                $small_image_path = 'storage/StudentImages/Small/'.$filename;

                Image::make($image_path)->save($large_image_path);
                Image::make($image_path)->resize(600,600)->save($medium_image_path);
                Image::make($image_path)->resize(300,300)->save($small_image_path);

                $student->image = $filename;


            }



        $student->save();
        $parent_guardian->save();

        return redirect('students')->with('success', 'Student details has been updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $sid
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy($sid)
    {
        $student = Student::find($sid);
        $student->Parent_Guardian->delete();
        $student->delete();
        return redirect('students')->with('success','Student has been deleted from the successfully');
        DNS1D::getBarcodeHTML($student['sid'], 'C128A');
    }

    public function parent_id_generator(){

        $last_ID = null;
        $new_ID = null;

        $IdCount = 0;

        $parents = Parent_Guardian::all();

        $date_now = Carbon::now();
        $year_now = $date_now->year;

        $last_two_digits_year = $year_now%100;

        $id_first_part = $last_two_digits_year.'PR';

        foreach ($parents as $parent){
            $last_ID = $parent->prId;

            $IdCount = $IdCount + 1;

        }



        if($last_ID == null){

            $new_ID = $id_first_part.'0001';

        }
        else{

            $last_digits = intval($IdCount) + 1;

            if($last_digits < 10)
                $id_last_part = '000'.$last_digits;
            elseif ($last_digits < 100 && $last_digits >= 10)
                $id_last_part = '00'.$last_digits;
            elseif($last_digits < 1000 && $last_digits >= 100)
                $id_last_part = '0'.$last_digits;
            else
                $id_last_part = $last_digits;

            $new_ID = $id_first_part.$id_last_part;


        }


        return $new_ID;
    }

    public function student_id_generator($class){
        //$class = 1;
        if($class < 10){
            $class = '0'.$class;
        }
        $last_ID = null;
        $new_ID = null;
        $IdCount = 0;
        $students = Student::all();

        $date_now = Carbon::now();
        $year_now = $date_now->year;

        $last_two_digits_year = $year_now%100;

        $id_first_part = $last_two_digits_year.$class;

        foreach ($students as $student){
            $last_ID = $student->sid;

            $sub = substr($last_ID,0,4);
            if(strcmp($sub,$id_first_part) == 0){
                $IdCount = $IdCount + 1;
            }
        }



        if($last_ID == null){

            $new_ID = $id_first_part.'0001';

        }
        else{

            $last_digits = intval($IdCount + 1);

            if($last_digits < 10)
                $id_last_part = '000'.$last_digits;
            elseif ($last_digits < 100 && $last_digits >= 10)
                $id_last_part = '00'.$last_digits;
            elseif($last_digits < 1000 && $last_digits >= 100)
                $id_last_part = '0'.$last_digits;
            else
                $id_last_part = $last_digits;

            $new_ID = $id_first_part.$id_last_part;


        }


        return $new_ID;
    }

    public function showSearchView(){
        $students = null;
        $parents = null;
        $querysuccess =null;
        $queryunsuccess =null;
        return view('Admin.User_Management.Student.search_student',compact('students','parents','querysuccess','queryunsuccess'));
    }

    public function search(Request $request){

        $this->validate(request(), [
            'query' => 'required',
            'search_by' => 'required'
        ]);

        $search_by = $request->get('search_by');
        $query = $request->get('query');

        $students = null;
        $parents = null;
        $querysuccess =null;
        $queryunsuccess =null;

        switch($search_by){
            case 'fname':$students = Student::with('Parent_Guardian')->where('first_name', 'LIKE', '%'. $query. '%')->get();

                        break;
            case 'mname':$students = Student::with('Parent_Guardian')->where('middle_name', 'LIKE', '%'. $query. '%')->get();

                        break;
            case 'lname':$students = Student::with('Parent_Guardian')->where('last_name', 'LIKE', '%'. $query. '%')->get();

                        break;
            case 'sid':$students = Student::with('Parent_Guardian')->where('sid', 'LIKE', '%'. $query. '%')->get();

                        break;

            case 'gender':$students = Student::with('Parent_Guardian')->where('Gender', 'LIKE', '%'. $query. '%')->get();

                        break;
            case 'pfname':$parents = Parent_Guardian::with('student')->where('first_name', 'LIKE', '%'. $query. '%')->get();

                        break;
            case 'pmname':$parents = Parent_Guardian::with('student')->where('middle_name', 'LIKE', '%'. $query. '%')->get();

                        break;
            case 'plname':$parents = Parent_Guardian::with('student')->where('last_name', 'LIKE', '%'. $query. '%')->get();

                        break;
            case 'poccupation':$parents = Parent_Guardian::with('student')->where('occupation', 'LIKE', '%'. $query. '%')->get();

                        break;
            case 'pnic':$parents = Parent_Guardian::with('student')->where('NIC_Passport', 'LIKE', '%'. $query. '%')->get();

                        break;
            case 'workSector':$parents = Parent_Guardian::with('student')->where('working_sector', 'LIKE', '%'. $query. '%')->get();

                        break;


        }

        if($students){
            $querysuccess = 'The search results for your query '. $query.' are:';

            return view('Admin.User_Management.Student.search_student',compact('students','querysuccess','queryunsuccess'));
        }

        elseif ($parents){
            $querysuccess = 'The search results for your query '.$query.' are:';
            return view('Admin.User_Management.Student.search_student',compact('students','parents','querysuccess','queryunsuccess'));
        }


    }

    public function showStudentDashboard(){
        return view('Student.dashboard');
    }

}
