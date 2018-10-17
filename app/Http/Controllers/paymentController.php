<?php

namespace App\Http\Controllers;
use App\payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Totpay = $this->calculatepayment();
        $noid  = $this->noOfid();
        $payments = payment::all()->toArray();
        return view('Admin\Finance_Management\onlinePayment', compact('payments','Totpay','noid'));
    }

    public function calculatepayment()
    {
        $Totpay = payment::all()->sum ('Amount');
        return $Totpay;
    }

    public function noOfid()
    {
        $noid = payment::all()->count ();
        return $noid;
    }
    /**
     * Show the form for creating a new resource..
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('layouts.Finance_Management.onlinePayment');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $payment = $this->validate(request(), [
            'AdmissionNo' => 'required',
            'Bank' => 'required',
            'Branch' => 'required',
            'Amount' => 'required',
            'DepositedDate' => 'required',
            'Remark' => 'required',

        ]);

        payment::create($payment);

        return back() ->with('success', 'Product has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
    public function destroy($id)
    {


    }


}
