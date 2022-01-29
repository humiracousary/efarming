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
            'place'=>$request->place,
            'date'=>$request->date,
            'time'=>$request->time,
        
        ]);
        return redirect()->route('event.list');

}
public function eventdelete($id)
   {
        $data = event::find($id);

        if ($data)
         {
          $data->delete();
          return redirect()->back();
         }    
    }


public function events()
    {
        $event=event::all();
        return view('website.pages.eventshow',compact('event'));
    }
}