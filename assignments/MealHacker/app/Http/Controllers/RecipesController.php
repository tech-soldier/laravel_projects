<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Recipe;
use App\Category;
use Session;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();
        $categories = Category::all();
        $title = 'MealHacker';
        return view('recipes.all', compact('recipes', 'title', 'categories'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create a New Recipe';
        return view('admin.create')->withTitle($title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating the data
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'ingredients' => 'required',
            'recipe' => 'required',
            'prep_time' => 'required|integer',
        ]);

        //storing the data in the database
        $recipe = new Recipe;

        $recipe->name = $request->name;
        $recipe->description = $request->description;
        $recipe->ingredients = $request->ingredients;
        $recipe->recipe = $request->recipe;
        $recipe->prep_time = $request->prep_time;
        $recipe->Vegetarian = $request->Vegetarian;
        $recipe->image = $request->image;
        $recipe->category_id = $request->category_id;

        $recipe->save();

        Session::flash('success', 'The recipe was successfully added!');


        // redirect to another page
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);
        // id is a recipe
        $title = 'Detailed View';
        return view('admin.show')->withTitle($title)->withRecipe($recipe);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
