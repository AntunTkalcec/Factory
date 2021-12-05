<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function Symfony\Component\String\b;

class Translation extends Model
{
    use HasFactory;

    public function meals() {
        return $this->belongsToMany(Meal::class);
    }

    public function ingredients() {
        return $this->belongsToMany(Ingredient::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function language() {
        return $this->belongsTo(Language::class);
    }
}
