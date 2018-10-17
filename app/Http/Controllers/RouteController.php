<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Route;


class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Route::all()->toArray();
        return view('Admin.Transport_Management.Route', compact('routes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('Admin.Transport_Management.Route');

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        //$route = $request;
//        $routedb = new Route;
//        return $Route;
        //
//        $Route=$this->validate(request(),[
//            'routeName'=>'required',
//            'driverName'=>'required',
//            'stopName'=>'required',
//            'vehicle'=>'required',
//            'amount'=>'numeric'
//
//
//        ]);

        $routedb=new Route();
        $this->validate(request(),[
            'routeName'=>'required',
            'driverName'=>'required',
            'stopName'=>'required',
            'vehicle'=>'required',
            'amount'=>'required'

        ]);

        $routedb->routeName = $request->routeName;
        $routedb->driverName = $request->driverName;
        $routedb->stopName = $request->stopName;
        $routedb->vehicle = $request->vehicle;
        $routedb->amount = $request->amount;



        try{
            $routedb->save();
            return back()->with('success','Student Report has been added');

        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors($e);
        }




//        try{
//            $student_reports->save();
//            return back()->with('success','Student Report has been added');
//
//        }catch (Exception $e){
//            return redirect()->back()->withInput()->withErrors($e);
//        }
//
//        try
//        {
//            $routedb->routeName = $request->routeName;
//            $routedb->driverName = $request->driverName;
//            $routedb->stopName = $request->stopName;
//            $routedb->vehicle = $request->vehicle;
//            $routedb->amount = $request->amount;
//
//            $routedb->save();
//            //RouteController::create($Route);
//
////            return 'pop';
//
//        }catch(Exception $e){
//            return $e;
//        }
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
        $routes= Route::find($id);
        return view('Admin.Transport_Management.updateRoute',compact('routes','id'));
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
        $routes = Route::find($id);
        $this->validate(request(), [
            'routeName'=>'required',
            'driverName'=>'required',
            'stopName'=>'required',
            'vehicle'=>'required',
            'amount'=>'numeric'

        ]);

        $routes->routeName = $request->get('routeName');
        $routes->driverName = $request->get('driverName');
        $routes->stopName = $request->get('stopName');
        $routes->vehicle = $request->get('vehicle');
        $routes->amount = $request->get('amount');


        $routes->save();
        return redirect('routes')->with('success','Route has been updated');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function destroy($id)
    {
        $routes = Route::find($id);
        $routes->delete();
        return redirect('routes')->with('success','Route has been  deleted');
    }









}
