<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class PagesController extends Controller
{
    public function getHome() {

        $recipes = Recipe::take(2)->get();
        $title = 'MealHacker';
        return view('home', compact('recipes', 'title'));
    }


    public function getContact() {
        return view('contact');
    }

    public function getAbout() {
        return view('about');
    }


}
