<?php

namespace App\Http\Controllers;

use App\IssueBook;
use App\LibrarySettings;
use App\Member;
use App\ReturnBook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use function MongoDB\BSON\toJSON;

class IssueBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public $IssueBooks = null;
    // public $currentTime = null;
     public $fine = null;

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
            'bookbarcode' => 'required|min:8',
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
//        if($id != )

        //return $id;
        $current_time = Carbon::now()->toDateTimeString();
        $this->IssueBooks = IssueBook::find($id);
        $IssueTime = $this->IssueBooks-> created_at;
        $timestamp = strtotime($IssueTime);
        $current_time = strtotime($current_time);
        //$dataForFine = LibrarySettings::where('memberid', $memberId)->first();
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
        //echo "SDggsgdsgs";

        $IssueBookID = $request->get('issueBooks');
        $Book = IssueBook::find($IssueBookID);
        $confirmReturnBook = $Book;
        $fine = $request->get('fine');
       // RetunBook returnBook = new ReturnBook();
        //dd($confirmReturnBook);
        //dd($fine);
        //$confirmReturnBook = IssueBook::all()->toArray();
       // return $confirmReturnBook;
       // return view('Admin.Library_Management.viewAllReturnBooks',compact('confirmReturnBook'));
//        ReturnBook::create($confirmReturnBook);
//
//        return back() ->with('success','Book has been returned');

        $memberId = $confirmReturnBook -> issuememberid;
        //$overallFine =
        //dd($confirmReturnBook);
        //dd($memberId);
       // return ($memberId);
        //$dataFromMembers = Member::find($memberId);
        $dataFromMembers = Member::where('memberid', $memberId)->first();
       // dd($dataFromMembers);
       // return $dataFromMembers;
        $returnCurrentTime = Carbon::now()->toDateTimeString();
       // $returnCurrentTime = strtotime($returnCurrentTime);
       // dd($returnCurrentTime);

        $return_books = new ReturnBook();
        $return_books->bookbarcode = $confirmReturnBook->bookbarcode;
        $return_books->issuememberid = $confirmReturnBook->issuememberid;
        $return_books->fine = $fine;
        //$return_books->returndate = $returnCurrentTime;
        $return_books->save();
        //dd($return_books);

        $books = IssueBook::find($IssueBookID);
        $books->delete();
        return redirect('Library/returnBook')->with('success','Book has been  returned');

    }


}
