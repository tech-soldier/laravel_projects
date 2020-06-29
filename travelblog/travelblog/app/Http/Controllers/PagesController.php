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

        $h1 = "Explore The World";

        return view('pages.home')->withH1($h1);

    }

    public function getAbout() {
        $h1 = "About Me";

        return view('pages.about')->withH1($h1);
    }

    public function getDestinations() {
        $h1 = "Destinations";

        return view('pages.destinations')->withH1($h1);
    }

    public function getTurkey() {
        $h1 = "Turkey";

        return view('pages.turkey')->withH1($h1);
    }

    public function getUkraine() {
        $h1 = "Ukraine";

        return view('pages.ukraine')->withH1($h1);
    }

    public function getUae() {
        $h1 = "United Arab Emirates";

        return view('pages.uae')->withH1($h1);
    }


}
