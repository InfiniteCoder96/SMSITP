<?php

namespace App\Http\Controllers;

use App\IssueBook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class IssueBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public $IssueBooks = null;

    public function index()
    {
        $issue_books = IssueBook::all()->toArray();
        return view('Admin.Library_Management.issueBookTable',compact('issue_books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Library_Management.issueBook');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $issueBook = $this->validate(request(), [
            'bookbarcode' => 'required',
            'issuememberid' => 'required',

        ]);


        IssueBook::create($issueBook);

        return back()->with('success', 'Book has been issued');;
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

    }

    public function return(Request $request)
    {
        $id = $this->validate(request(), [
            'returnbookbarcode' => 'required|min:8',

        ]);

        $id = $request->get('returnbookbarcode');

        //return $id;
        $current_time = Carbon::now()->toDateTimeString();
        $this->IssueBooks = IssueBook::find($id);
        $IssueTime = $this->IssueBooks-> created_at;

        $timestamp = strtotime($IssueTime);
     //   return $timestamp;

        $current_time = strtotime($current_time);
       // return $current_time;

      //  return $current_time-$timestamp;

        if($current_time-$timestamp < 604800){
            $fine = 0;
        }
        else{
            $fine = 100;
        }
        $IssueBooks = $this->IssueBooks;
        //return $current_time;
        return view('Admin.Library_Management.returnBookConfirmation',compact('IssueBooks','fine','id'));
      //  return $IssueTime;
       // return $fine;

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
    }


    /**
     * get member list by first name
     * @param Request $request
     * @return null
     */
    public function addReturnTable(Request $request){

        $IssueBooks = $request->get('issueBooks');
        $Book = IssueBook::find($IssueBooks);
        $confirmReturnBook = $Book;
        //$confirmReturnBook = IssueBook::all()->toArray();
       //return $confirmReturnBook;
        return view('Admin.Library_Management.viewAllReturnBooks',compact('confirmReturnBook'));
    }


}
