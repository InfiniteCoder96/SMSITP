<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coaches;

class coachController extends Controller
{

    public function index()
    {
        $categories = coaches::all()->toArray();
        return view('Admin.Non_Academic_Management.manage_coaches', compact('categories'));
        //
    }


    public function create()
    {
        return view('Admin.Non_Academic_Management.manage_coaches.create');  //
    }


    public function store(Request $request)
    { $coaches = $this->validate(request(), [

        'coach_name' => 'required|unique:coaches',
        'sport_id' => 'required|unique:coaches',
        'approval' => 'required|unique:coaches'
    ]);

        $coaches = new coaches();


            $chID =  $this->coachIDGenerator();

            $coaches->coach_id = $chID;
            $coaches->coach_name = $request->get('coach_name');
            $coaches->sport_id = $request->get('sport_id');
            $coaches->approval = $request->get('approval');
            $coaches->save();

//            SubjectS::create($SubjectSS);

        return back()->with('success', 'sports has been added');

        }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($coach_id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($coach_id)
    {
        $coaches = coaches::find($coach_id);
        return view('Admin.Non_Academic_Management.update_coaches', compact('coaches', 'coach_id'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $coach_id)
    {
        $coaches = coaches::find($coach_id);
        $this->validate(request(), [

            'coach_name' => 'required',
            'sport_id' => 'required',
            'approval' => 'required'
        ]);

        $coaches->coach_name = $request->get('coach_name');
        $coaches->sport_id = $request->get('sport_id');
        $coaches->approval = $request->get('approval');
        $coaches->save();
        return redirect('coaches')->with('success', 'coach has been updated');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($coach_id)
    {

        $coaches = coaches::find($coach_id);
        $coaches->delete();
        return redirect('coaches')->with('success', 'coach has been  deleted');


        //
    }


    public function coachIDGenerator()
    {
        //$Grade = '03';
        $coaches = coaches::all();

        $last_ID = null;

        $idVal = 0;

        $IDFirstP = 'CID';

        foreach (  $coaches as  $coache) {


            $last_ID =  $coache->coach_id;

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
}
