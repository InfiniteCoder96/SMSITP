<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Calendar;
use App\Event;

class EventController extends Controller
{
    //

    public function index()
    {
        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#f05050',
                        'url' => 'pass here url and any route',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('Admin.Academic_Management.fullcalender', compact('calendar'));
    }


    public function calendar(){
        $events=Event::all();

        foreach($events as $event){
            $e_list=[];

            $e_list[]=Calendar::event(
                $event->title,
                false,
                new \DateTime($event->from_date),
                new \DateTime($event->to_date)
            );

            $cal_events=Calendar::addEvents($e_list);
        }

        return view('Admin.Academic_Management.fullCalender',compact('cal_events'));
    }

}
