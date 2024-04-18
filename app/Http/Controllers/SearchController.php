<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(Request $request)
    {
        $recipes = null;

        if ($query = $request->get('search_query')){
            $recipes = Recipe::search($query)->get();
        }

        return view('search', [
            'recipes' => $recipes
        ]);
    }
}
