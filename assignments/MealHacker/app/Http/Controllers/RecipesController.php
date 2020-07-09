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
        $title = 'Admin Page';
        $h2 = "All the recipes";
        return view('admin.index', compact('recipes', 'title', 'categories', 'h2'));

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
            'image' => 'required',
            'category_id' => 'required',
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
        //find the recipe in the database and save it in the variable
        $recipe = Recipe::find($id);
        $title = "Edit recipe";

        //return the view and pass the variable
        return view('admin.edit')->withRecipe($recipe)->withTitle($title);
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
        //validating the data
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'ingredients' => 'required',
            'recipe' => 'required',
            'prep_time' => 'required|integer',
            'image' => 'required',
            'category_id' => 'required',
        ]);

        //save to databese
        $recipe = recipe::find($id);

        $recipe->name = $request->input('name');
        $recipe->description = $request->input('description');
        $recipe->ingredients = $request->input('ingredients');
        $recipe->recipe = $request->input('recipe');
        $recipe->prep_time = $request->input('prep_time');
        $recipe->Vegetarian = $request->input('Vegetarian');
        $recipe->image = $request->input('image');
        $recipe->category_id = $request->input('category_id');

        $recipe->save();

        Session::flash('success', 'The recipe was successfully updated!');


        // redirect to another page
        return redirect()->route('recipe.show', $recipe->id);
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
