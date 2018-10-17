<?php

namespace App\Http\Controllers;

use App\approvedPayment;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApprovedPaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $approvedPayments = approvedPayment::all()->toArray();
        return view('Admin\Finance_Management\approvedPayment', compact('approvedPayments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.Finance_Management\approvedPayment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $approvedPayment = $this->validate(request(), [
            'AdmissionNo' => 'required',
            'Amount' => 'required',
            'Bank' => 'required',
            'DepositedDate' => 'required',
            'Remark' => 'required',

        ]);
    }

    public function downloadPDF(Request $request)
    {
        $approvedPayment= DB::table('approved_payments')->get();
        $pdf= PDF::loadView('Admin.Finance_Management.pdfap',compact('approvedPayment'));
        return $pdf->stream('approved.pdf');
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
}
