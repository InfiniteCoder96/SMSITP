<?php

namespace App\Http\Controllers;

use App\salary;
use Illuminate\Http\Request;
//use DB;
use PDF;
use Illuminate\Support\Facades\DB;

class salaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salary = salary::all();
        $netS = null;
//        return view('Admin.HR_Management.payroll', compact('salary','netS'));
        return view('Admin.HR_Management.payroll', compact('salary'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.HR_Management.payroll');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = new salary();

        $this->validate(request(),[
            'sid' =>'required',
            'category' =>'required',
            'leave' =>'required|numeric',
            'allowance' =>'required|numeric',
            'bonus' =>'required|numeric',
            'deduction' =>'required|numeric',

        ]);

        $salary->sid = $request->get('sid');
        $category = $salary->category = $request->get('category');
        $leave = $salary->leave = $request->get('leave');

        $bonus = $salary->bonus = $request->get('bonus');
        $deductions =$salary->deduction = $request->get('deduction');
        $allowance = $salary->allowance = $request->get('allowance');


        if($category == 'academic' && $leave >= '2'){
            $bSalary = 50000;
            $allowance = $allowance -2000;
        }
        elseif($category == 'academic' && $leave < '2'){
            $bSalary = 50000;
        }
        elseif($category == 'nonacademic' && $leave >= '2'){
            $bSalary = 10000;
            $allowance = $allowance -1000;
        }
        elseif($category == 'nonacademic' && $leave < '2'){
            $bSalary = 10000;
        }

        $salary->allowance = $allowance;
        $salary->bSalary = $bSalary;
        $salary->net_salary = ($bSalary + $bonus +$allowance - ($deductions));

        $check = DB::table('recruits')->where('tid',$request->sid)->get();
//        $check = DB::table('recruits')->where('id',$request->sid)->get();
        if($check->isEmpty()){
            return back()->with('fail', 'Not a registered staff member. Please enter a valid ID');
        }
        else
        {
            $salary->save();
            return back()->with('success', 'Salary has been added');
        }



//        return back()->with('success', 'Staff member has been added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($sid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sid)
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
    public function update(Request $request, $sid)
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
        $salary = salary::find($id);
        $salary->delete();
        return redirect('salary')->with('success','Staff member has been  deleted');
    }

    public function downloadPDF(Request $request, $sid)
    {
//        $salary = salary::find($sid);

        $salary = DB::table('salary')->where('sid',$request->sid)->get();

        $pdf = PDF::loadView('Admin.HR_Management.pdf', compact('salary'));
        return $pdf->download('abc.pdf');
    }
}
