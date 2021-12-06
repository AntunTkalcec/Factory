<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable;

class Category extends Model
{
    use HasFactory;

    public function meals() {
        return $this->hasMany(Meal::class);
    }

    /*public function categories_translations() {
        return $this->hasMany(CategoriesTranslations::class);
    }*/
}
