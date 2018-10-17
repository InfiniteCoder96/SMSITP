<?php

namespace App\Http\Controllers;
use App\event;
use App\non_academic_event;
use DateTime;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class non_academic_eventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = non_academic_event::all()->toArray();
        return view('Admin.Non_Academic_Management.addEvents', compact('events'));
        //
    }

    public function showeventsview(){
        $events = non_academic_event::all();
        return view('Frontend.events', compact('events'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('Admin.Non_Academic_Management.addEvents');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = new non_academic_event();

        $this->validate(request(), [
            'date' => 'required|unique:events',
            'heading' => 'required|unique:events',
            'time'=>'required|unique:events',
            'place'=>'required|unique:events',
            'description'=>'required|unique:events'
        ]);

        $date = $request->get('date');

        $daytime = DateTime::createFromFormat("Y-m-d", $date);
        $day = $daytime->format("d");
        $month = $daytime->format("F");

        $event->date = $request->get('date');
        $event->day = $day;
        $event->month = $month;
        $event->heading = $request->get('heading');
        $event->time = $request->get('time');
        $event->place = $request->get('place');
        $event->description = $request->get('description');

        $event->save();
//        event::create($events);
//
       return back()->with('success', 'event has been added');
        //
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
    public function edit($event_id)
    {
        $events = non_academic_event::find($event_id);
        return view('Admin.Non_Academic_Management.updateEvents',compact('events','event_id'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $event_id)
    {
        $events = non_academic_event::find($event_id);
        $this->validate(request(), [
            'event_id' => 'required|numeric|min:1|unique:events',
            'date' => 'required|unique:events',
            'heading' => 'required|unique:events',
            'time'=>'required|unique:events',
            'place'=>'required|unique:events',
            'description'=>'required|unique:events'
        ]);
        $events->event_id = $request->get('event_id');
        $events->date = $request->get('date');
        $events->heading = $request->get('heading');
        $events->time = $request->get('time');
        $events->place = $request->get('place');
        $events->description = $request->get('description');
        $events->save();
        return redirect('events')->with('success','Event has been updated');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($event_id)
    {
        $events = non_academic_event::find($event_id);
        $events->delete();
        return redirect('events')->with('success','Event has been  deleted');
        //
    }
}
