<?php

namespace App\Http\Controllers;

use App\IssueBook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IssueBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        //
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
     */
    public function getMembers(){
        die('hit');
    }
}
