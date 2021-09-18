<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the recipe.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Recipe::all();
    }

    /**
     * Store a newly created recipe in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'ingredients' => 'required',
            'body' => 'required'
        ]);
        return Recipe::create($request->all());
    }

    /**
     * Display the specified recipe.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       return Recipe::find($id);
    }

    /**
     * Update the specified recipe in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $recipe = Recipe::find($id);

        $recipe->update($request->all());
        return $recipe;
    }

    /**
     * Remove the specified recipe from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recipe::destroy($id);
    }
    /**
     * Serach a recipe.
     *
     * @param  int  str
     * @return \Illuminate\Http\Response
     */
    public function search($title)
    {
        return Recipe::where('title', 'like', '%'.$title.'%')->get();
    }
}
