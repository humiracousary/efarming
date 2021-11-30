<?php

namespace App\Http\Controllers;

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


}
