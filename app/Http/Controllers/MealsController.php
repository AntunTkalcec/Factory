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

        //$test = dd(DB::table('meals')->get());

        $category1 = $category;
        if ($category1 == 0) {
            $category1 = null;
        }
        $tags1 = $tags;
        $lang1 = $lang;
        global $allMeals;

        /*if ($category1 != null) {
            if ($tags1 != null) {
                $allMeals = DB::table('meals')->join('categories', function ($join) {
                $join->on('meals.category_id', '=', 'categories.id')->where('categories.id', '=', $category1);
                })->join('meals_ingredients', 'meals_ingredients.meal_id', '=', 'meals.id')->join('ingredients', 'ingredients.id', '=', 
                'meals_ingredients.ingredient_id')->join('meals_tags', 'meals_tags.meal_id', '=', 'meals.id')->join('tags', function($join2) {
                    $join2->on('tags.id', '=', 'meals_tags')->where('tags.id', '=', $tags1);
                })->get(); 

                $allMeals = DB::select('SELECT DISTINCT * FROM meals m join categories c on m.category_id = c.id join meals_ingredients mi on 
                mi.meal_id = m.id join ingredients i on i.id = mi.ingredient_id join meals_tags mt on mt.meal_id = m.id join 
                tags t on t.id = mt.tag_id where c.id = '.$category1.' and t.id = '.$tags1.' group by m.id, i.id, t.id'); 
                //$allMeals = json_decode(json_encode($allMeals), true);
                //$allMeals = DB::select('SELECT * FROM meals m join categories c on m.category_id = c.id where c.id = '.$category1.'');
                //dd($allMeals);
            }
            if ($lang1 != null) {
                switch ($lang1) {
                    case 1: 
                        foreach ($allMeals as $meal) {
                            $meal->translate('en')->title;
                            $meal->save();
                        }
                        break;
                    case 2: $allMeals->translate('de'); break;
                    case 3: $allMeals->translate('fr'); break;
                }
            } 
            else if ($tags == null) {
                $allMeals = DB::select('SELECT DISTINCT * FROM meals m join categories c on m.category_id = '.$category1.' join meals_ingredients mi 
                on mi.meal_id = m.id join ingredients i on i.id = mi.ingredient_id join meals_tags mt on mt.meal_id = m.id join tags t on t.id = mt.tag_id 
                group by m.id, i.id, t.id');
            }
        }
        else if ($category1 === 0) {
            if ($tags1 != null) {
                $allMeals = DB::select('SELECT DISTINCT * FROM meals m join categories c on m.category_id = c.id join meals_ingredients mi on 
                mi.meal_id = m.id join ingredients i on i.id = mi.ingredient_id join meals_tags mt on mt.meal_id = m.id join 
                tags t on t.id = mt.tag_id where t.id = '.$tags1.' group by m.id, i.id, t.id');
            }
        }
        else {
            $allMeals = DB::select('SELECT DISTINCT * FROM meals m join categories c on m.category_id = c.id join meals_ingredients mi 
            on mi.meal_id = m.id join ingredients i on i.id = mi.ingredient_id join meals_tags mt on mt.meal_id = m.id join tags t on t.id = mt.tag_id 
            group by m.id, i.id, t.id');
        } */

        if ($category1 != null && $tags1 != null) {
            $allMeals = DB::select('SELECT DISTINCT * FROM meals m join categories c on m.category_id = c.id join meals_ingredients mi on 
            mi.meal_id = m.id join ingredients i on i.id = mi.ingredient_id join meals_tags mt on mt.meal_id = m.id join 
            tags t on t.id = mt.tag_id where c.id = '.$category1.' and t.id = '.$tags1.' group by m.id, i.id, t.id'); 
        }
        else if ($category1 != null && $tags1 == null) {
            $allMeals = DB::select('SELECT DISTINCT * FROM meals m join categories c on m.category_id = '.$category1.' join meals_ingredients mi 
            on mi.meal_id = m.id join ingredients i on i.id = mi.ingredient_id join meals_tags mt on mt.meal_id = m.id join tags t on t.id = mt.tag_id 
            group by m.id, i.id, t.id');
        }
        else if ($category1 == null && $tags1 != null) {
            $allMeals = DB::select('SELECT DISTINCT * FROM meals m join categories c on m.category_id = c.id join meals_ingredients mi on 
            mi.meal_id = m.id join ingredients i on i.id = mi.ingredient_id join meals_tags mt on mt.meal_id = m.id join 
            tags t on t.id = mt.tag_id where t.id = '.$tags1.' group by m.id, i.id, t.id');
        }
        else if ($category1 == null && $tags1 == null) {
            $allMeals = DB::select('SELECT DISTINCT * FROM meals m join categories c on m.category_id = c.id join meals_ingredients mi 
            on mi.meal_id = m.id join ingredients i on i.id = mi.ingredient_id join meals_tags mt on mt.meal_id = m.id join tags t on t.id = mt.tag_id 
            group by m.id, i.id, t.id');
        }
        dd($allMeals);
    }
}
