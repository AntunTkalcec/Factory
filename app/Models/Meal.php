<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function translations() {
        return $this->hasMany(Translation::class);
    }

    public function tags() {
        return $this->hasMany(Tag::class);
    }

    public function ingredients() {
        return $this->hasMany(Ingredient::class);
    }
}
