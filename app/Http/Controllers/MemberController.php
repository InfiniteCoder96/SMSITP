<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::all()->toArray();
        return view('Admin.Library_Management.viewAllMembers',compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Library_Management.addNewMemberForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newAddMember = $this->validate(request(),[
           'firstname' => 'required',
            'lastname' => 'required',
            'memberid' => 'required',
            'memberphone' => 'required',
            'memberemail' => 'required'
        ]);

        Member::create($newAddMember);

        return back() ->with('success','New Member has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = Member::find($id);
        return view('Admin.Library_Management.editMemberForm',compact('members','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $members = Member::find($id);
        $this->validate(request(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'memberid' => 'required',
            'memberphone' => 'required',
            'memberemail' => 'required'
        ]);
        $members->firstname = $request->get('firstname');
        $members->lastname = $request->get('lastname');
        $members->memberid = $request->get('memberid');
        $members->memberphone = $request->get('memberphone');
        $members->memberemail = $request->get('memberemail');
        $members->save();
        return redirect('members')->with('success','Member No:'.$members->membername.' Member has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();
        return redirect('members')->with('success','Member has been  deleted');
    }

    /**
     * get member list by first name
     * @param searchtext
     * return json object
     */
    public function getMembers(){
        /**
         * get data from db
         * return json_encode();
         * retun
         */


       return "[{
        \"id\": 1,
        \"name\": 'Item 1',
        \"ignore\": false
      },{
        \"id\": 2,
        \"name\": 'Item 2',
        \"ignore\": false
      },{
        \"id\": 3,
        \"name\": 'Item 3',
        \"ignore\": false
      }";
    }
}
