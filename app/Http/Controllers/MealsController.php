<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Meal;

class MealsController extends Controller
{
    public function index($category = null, $tags = null, $lang = null)
    {
        /*$meal1 = Meal::find($meal);
        if ($meal1 == NULL && $meal != NULL) {
            abort(404);
        }

        $allMeals = DB::table('meals')->join('categories', 'meals.category_id', '=', 'categories.id')
        ->select('meals.title', 'categories.title as category_title')->get();

        if ($meal != NULL) {
            return view('meals', [
                'meal1' => $meal1,
            ]);
        }

        if ($meal == NULL) {
            return view('meals', [
                'meals' => $allMeals,
            ]);
        } */

        $category1 = $category;
        $tags1 = $tags;
        $lang1 = $lang;

        if ($category1 != null) {
            if ($tags1 != null) {
                $allMeals = DB::table('meals')->join('categories', function ($join) {
                $join->on('meals.category_id', '=', 'categories.id')->where('categories.id', '=', $category1);
                })->join('meals_ingredients', 'meals_ingredients.meal_id', '=', 'meals.id')->join('ingredients', 'ingredients.id', '=', 
                'meals_ingredients.ingredient_id')->join('meals_tags', 'meals_tags.meal_id', '=', 'meals.id')->join('tags', function($join2) {
                    $join2->on('tags.id', '=', 'meals_tags')->where('tags.id', '=', $tags1);
                })->get();
                dd($allMeals);
            }
        }
    }
}
