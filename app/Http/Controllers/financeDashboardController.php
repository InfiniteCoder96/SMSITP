<?php

namespace App\Http\Controllers;

use App\approvedPayment;
use App\disapprovedPayment;
use App\expence;
use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class financeDashboardController extends Controller
{
    public function calculateexpence()
    {
//    $totalexpence=expences::all()->sum()('amount');

        $total = expence::all()->sum('Amount');
        return $total;
    }

    public function calculateapprovedpayment()
    {
        $Total = approvedpayment::all()->sum('Amount');
        return $Total;
    }

    public function calculatedisapprovedpayment()
    {
        $Tot = disapprovedPayment::all()->sum('Amount');
        return $Tot;
    }

    public function finalReport()
    {

        $total = $this->calculateexpence();
        $Total = $this->calculateapprovedpayment();
        $Tot   = $this->calculatedisapprovedpayment();
        $profit = $Total-$total;
        $pdf= PDF::loadView('Admin.Finance_Management.finalReport',compact('total','Total','Tot','profit'));
        return $pdf->download('FinalReport.pdf');
    }



public function create()
{
    $total = $this->calculateexpence();
    $Total = $this->calculateapprovedpayment();
    $Tot   = $this->calculatedisapprovedpayment();
    $profit= $Total-$total;
    // dd($total);
    return view('Admin.Finance_Management.dashboard', compact('total','Total','Tot','profit'));




}

//public function  create()





}

