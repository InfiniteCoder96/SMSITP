<?php

namespace App\Http\Controllers;

use App\approvedPayment;
use App\disapprovedPayment;
use App\payment;
use App\pendingApproval;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pendingApprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendingApprovals = payment::all()->toArray();
        return view('Admin\Finance_Management\pendingpayments', compact('pendingApprovals'));
    }

    public function approvePayment()
    {
        $approveApprovals = pendingApproval::all()->toArray();
        $disapproveApprovals = pendingApproval::all()->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pendingApproval = $this->validate(request(), [
            'AdmissionNo' => 'required',
            'Amount' => 'required',
            'Bank' => 'required',
            'DepositedDate' => 'required',
            'Remark' => 'required',
            'Status' => 'required',
        ]);
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
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function approve(Request $request)
    {
        $id = $request->get('id');
        $pendingApprovals = payment::find($id);
        $pendingApprovals->delete();
        $approved = new approvedPayment();
        $approved->AdmissionNo = $pendingApprovals->AdmissionNo;
        $approved->Amount = $pendingApprovals->Amount;
        $approved->Bank = $pendingApprovals->Bank;
        $approved->DepositedDate = $pendingApprovals->DepositedDate;
        $approved->Remark = $pendingApprovals->Remark;
        $approved->save();

       return redirect('pendingApproval')->with('success','Product has been  deleted');

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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function disapprove(Request $request)
    {
        $id = $request->get('id');
        $pendingApprovals = payment::find($id);
        $pendingApprovals->delete();
        $disapproved = new disapprovedPayment();
        $disapproved->AdmissionNo = $pendingApprovals->AdmissionNo;
        $disapproved->Amount = $pendingApprovals->Amount;
        $disapproved->Bank = $pendingApprovals->Bank;
        $disapproved->DepositedDate = $pendingApprovals->DepositedDate;
        $disapproved->Remark = $pendingApprovals->Remark;
        $disapproved->save();
        return redirect('pendingApproval')->with('success','Product has been  deleted');
    }
}
