<?php

namespace App\Http\Controllers;

use App\Models\Tutorial;
use Illuminate\Http\Request;


class TutorialController extends Controller
{
    public function addtutorial()
    {
        return view('backend.pages.tutorial-add');
    }

    public function tutoriallist()
    {
        $tutorial = Tutorial::all();
        return view('backend.pages.tutorial-list',compact('tutorial'));
    }
    public function add(Request $request)
    {
         //dd($request->all());
         $filename='';
         if ($request->hasFile('image'))
         {
             $file=$request->file('image');
             $filename=date('ymdhms').'.'.$file->getClientOriginalExtension();
             $file->storeAs('uploads/',$filename);
         }

        Tutorial::create([
            'name'=>$request->name,
            'details'=>$request->details,
            'link'=>$request->link,
            'image'=>$filename
        ]);
        return redirect()->back();
        
    }
    
    public function tutorialdelete($id)
   {
        $data = Tutorial::find($id);

        if ($data)
         {
          $data->delete();
          return redirect()->back();
         }    
    }

}