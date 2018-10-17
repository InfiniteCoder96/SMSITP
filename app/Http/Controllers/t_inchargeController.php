<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\t_incharge;
use Illuminate\Database\Eloquent\Model;
class t_inchargeController extends Controller
{


    public function index()
    {
        $t_incharges = t_incharge::all()->toArray();
        return view('Admin.Non_Academic_Management.manage_teachers_in_charge', compact('t_incharges'));
        //
    }

    public function create()
    {
        return view('Admin.Non_Academic_Management.manage_teachers_in_charge.create');  //
    }


    public function store(Request $request)
    {
       $t_incharge= $this->validate(request(), [

            'teacher_name' => 'required|unique:t_incharges',
            'sport_id'=>'required|unique:t_incharges',
            'o_docs'=>'required|unique:t_incharges'
        ]);
        $t_incharge = new t_incharge();


        $TIID =  $this->teacherIDGenerator();

        $t_incharge->teacher_id = $TIID;
        $t_incharge->teacher_name = $request->get('teacher_name');
        $t_incharge->sport_id = $request->get('sport_id');
        $t_incharge->o_docs = $request->get('o_docs');
        $t_incharge->save();

//            SubjectS::create($SubjectSS);

        return back()->with('success', 'teacher has been added');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($teacher_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($teacher_id)
    {
        $t_incharge = t_incharge::find($teacher_id);
        return view('Admin.Non_Academic_Management.update_teachers-in-charge',compact('t_incharge','teacher_id'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $teacher_id)
    {
        $t_incharge = t_incharge::find($teacher_id);
        $this->validate(request(), [

            'teacher_name' => 'required',
            'sport_id'=>'required',
            'o_docs'=>'required|'
        ]);

        $t_incharge->teacher_name = $request->get('teacher_name');
        $t_incharge->sport_id = $request->get('sport_id');
        $t_incharge->o_docs = $request->get('o_docs');
        $t_incharge->save();
        return redirect('t_incharges')->with('success','teacher has been updated');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($teacher_id)
    {

        $t_incharge = t_incharge::find($teacher_id);
        $t_incharge->delete();
        return redirect('t_incharges')->with('success','teacher has been  deleted');
        //
    }
    public function teacherIDGenerator()
    {
        //$Grade = '03';
        $t_incharge = t_incharge::all();

        $last_ID = null;

        $idVal = 0;

        $IDFirstP = 'TID';

        foreach ( $t_incharge as $incharge) {


            $last_ID = $incharge->teacher_id;
            $sub = substr($last_ID,0,3);

            //substr($last_ID,5),$IDFirstP) == 0
            if(strval($IDFirstP) == strval($sub)){
                $idVal = $idVal + 1;
            }
        }

        $lastDigits = 0;

        if ($last_ID == null) {
            $sub = substr($last_ID, 0, 3);

            $last_ID = $IDFirstP . '01';
        } else {

            $lastDigits = $idVal + 1;

            if ($lastDigits < 10) {
                $IDLastP = '0' . $lastDigits;
            }
//            elseif ($lastDigits < 100 || $lastDigits > 10){
//                $IDLastP='0'.$lastDigits;
//            }
            else {
                $IDLastP = $lastDigits;
            }

            $last_ID = $IDFirstP . $IDLastP;

        }

        return $last_ID;

    }

//
}
