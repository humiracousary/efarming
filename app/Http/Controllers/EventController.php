<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Event;
class EventController extends Controller
{
    public function addevent()
    {
        return view('backend.pages.event-add');
    }

    public function eventlist()
    {
        $event=event::all();
        return view('backend.pages.event-list',compact('event'));
    }
    public function add(Request $request){
        // dd($request->all());
        Event::create([
            'name'=>$request->name,
            'details'=>$request->details,
            'date'=>$request->date,
            'time'=>$request->time,
        
        ]);
        return redirect()->back();

}
}