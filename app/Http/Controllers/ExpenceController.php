<?php

namespace App\Http\Controllers;


use App\expence;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Http\Request;


class ExpenceController extends Controller
{

    public function index()
    {
        $Expences = expence::all()->toArray();
        $Results=null;
        return view('Admin.Finance_Management.expenceReport',compact('Expences','Results'));
    }



    public function create()
    {
        return view('layouts.Finance_Management.ExpenceReport');
    }

    public function edit($ID)
    {
        $expence = expence::find($ID);
        return view('Admin.Finance_Management.expenceEdit',compact('expence','ID'));
    }



    public function update(Request $request, $ID)
    {
        $expences = expence::find($ID);
        $this->validate(request(), [
            'ExpenceType' => 'required',
            'Name' => 'required',
            'ID' => 'required',
            'Amount' => 'required',
            'Email' => 'required|email',
            'Status' => 'required',
            'Date' => 'required',
        ]);
        $expences->ExpenceType = $request->get('ExpenceType');
        $expences->Name = $request->get('Name');
        $expences->ID = $request->get('ID');
        $expences->Amount = $request->get('Amount');
        $expences->Email = $request->get('Email');
        $expences->Status = $request->get('Status');
        $expences->Date = $request->get('Date');

        $expences->save();


        return redirect('Expence')->with('success','Product has been updated');
    }

    public function destroy($ID)
    {
        $expence = expence::find($ID);
        $expence->delete();
        return redirect('Expence')->with('success','Product has been  deleted');
    }


    public function store(Request $request)
    {
        $expence = $this->validate(request(), [
            'ExpenceType' => 'required',
            'Name' => 'required',
            'ID' => 'required',
            'Amount' => 'required',
            'Email' => 'required',
            'Status' => 'required',
            'Date' => 'required',

        ]);

        expence::create($expence);

        return back()->with('success', 'Product has been added');
    }
    public function search(Request $request){
        $Expences=null;
        $Results=null;
        if($request->has('Name')){
            $Results=expence::where('Name','=',$request->Name)->get();
            return view('Admin.Finance_Management.expenceReport',compact('Results','Expences'));
        }
        else{
            $Results=null;
            return view('Admin.Finance_Management.expenceReport',compact('Results','Expences'));
        }
    }
    public function downloadPDF(Request $request)
    {
        $expence= DB::table('expences')->get();
        $pdf= PDF::loadView('Admin.Finance_Management.pdf',compact('expence'));
        return $pdf->stream('expence.pdf');
    }
}