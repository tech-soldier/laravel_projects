<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Recipe;

class PagesController extends Controller
{
    public function getHome() {

        $recipes = Recipe::take(2)->get();
        $categories = Category::all();
        $title = 'MealHacker';
        return view('home', compact('recipes', 'categories', 'title'));
    }


    public function getContact() {
        $title = 'Contact';
        return view('contact')->withTitle($title);
    }

    public function getAbout() {
        $title = 'About';
        return view('about')->withTitle($title);
    }


}
