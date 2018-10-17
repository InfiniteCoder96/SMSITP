<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\sport_categories;

class sports_categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = sport_categories::all();
        return view('Admin.Non_Academic_Management.manage_sports', compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sports_categories.create');  //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $sport_categories= $this->validate(request(), [

            'sports_name' => 'required|unique:sport_categories',
            'coach_id' => 'required|unique:sport_categories',
            'teacher_in_charge_id' => 'required|unique:sport_categories'
        ]);
        $sport_categories = new  sport_categories();


        $spID =  $this->sportIDGenerator();

        $sport_categories->sports_id = $spID;
        $sport_categories->sports_name = $request->get('sports_name');
        $sport_categories->coach_id = $request->get('coach_id');
        $sport_categories->teacher_in_charge_id = $request->get('teacher_in_charge_id');
        $sport_categories->save();

//            SubjectS::create($SubjectSS);

        return back()->with('success', 'sports has been added');

    }



    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sports_id)
    {
        $sport_categories = sport_categories::find($sports_id);
        return view('Admin.Non_Academic_Management.update_sports', compact('sport_categories', 'sports_id'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sports_id)
    {
        $sport_categories = sport_categories::find($sports_id);
        $this->validate(request(), [

            'sports_name' => 'required',
            'coach_id' => 'required',
            'teacher_in_charge_id' => 'required'
        ]);

        $sport_categories->sports_name = $request->get('sports_name');
        $sport_categories->coach_id = $request->get('coach_id');
        $sport_categories->teacher_in_charge_id = $request->get('teacher_in_charge_id');
        $sport_categories->save();
        return redirect('sport_categories')->with('success', 'sport has been updated');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($sports_id)
    {

        $sport_categories = sport_categories::find($sports_id);
        $sport_categories->delete();
        return redirect('sport_categories')->with('success', 'sport has been  deleted');
        //
    }

    public function showSearchView()
    {
        $categories = null;
        $querysuccess = null;
        $queryunsuccess = null;
        return view('Admin.Non_Academic_Management.search_sports', compact('categories', 'querysuccess', 'queryunsuccess'));
    }

    public function search(Request $request){

    $this->validate(request(), [
        'query' => 'required',
        'search_by' => 'required'
    ]);

    $search_by = $request->get('search_by');
    $query = $request->get('query');

    $categories = null;
    $querysuccess = null;
    $queryunsuccess = null;

    switch ($search_by) {
        case 'sports_id':
            $categories = sport_categories::where('sports_id', 'LIKE', '%' . $query . '%')->get();

            break;
        case 'sports_name':
            $categories = sport_categories::where('sports_name', 'LIKE', '%' . $query . '%')->get();

            break;
        case 'coach_id':
            $categories = sport_categories::where('coach_id', 'LIKE', '%' . $query . '%')->get();

            break;
        case 'teacher_in_charge_id':
            $categories = sport_categories::where('teacher_in_charge_id', 'LIKE', '%' . $query . '%')->get();

            break;


    }

    if ($categories) {
        $querysuccess = 'The search results for your query ' . $query . ' are:';

        return view('Admin.Non_Academic_Management.search_sports', compact('categories', 'querysuccess', 'queryunsuccess'));
    }
    }



    public function sportIDGenerator()
    {
        //$Grade = '03';
        $sport_categories = sport_categories::all();

        $last_ID = null;

        $idVal = 0;

        $IDFirstP = 'SPID';

        foreach ( $sport_categories as $sport_categorie) {


            $last_ID = $sport_categorie->sports_id;

            $sub = substr($last_ID,0,4);

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

