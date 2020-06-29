<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
        # process variable data or params
        # talk to the model
        # receive data from the model
        # compile or process data from the model if needed
        # pass that data to the correct view
        return view('pages.home');
    }

    public function getAbout() {
        return view('pages.about');
    }

    public function getDestinations() {
        return view('pages.destinations');
    }

    public function getTurkey() {
        return view('pages.turkey');
    }


    public function getUkraine() {
        return view('pages.ukraine');
    }


    public function getUae() {
        return view('pages.uae');
    }


}
