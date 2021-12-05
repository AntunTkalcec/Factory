<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Meal;

class MealsController extends Controller
{
    public function index($meal = NULL)
    {
        $meal1 = Meal::find($meal);
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
        }
    }
}
