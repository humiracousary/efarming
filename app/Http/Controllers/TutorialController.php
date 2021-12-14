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
        return view('backend.pages.tutorial-list');
    }
    public function add(Request $request)
    {
         //dd($request->all());
        Tutorial::create([
            'name'=>$request->name,
            'details'=>$request->details
        ]);
        return redirect()->back();
        
    }


}
