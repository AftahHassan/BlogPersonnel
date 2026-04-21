<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Colonnes que l'on peut remplir
    protected $fillable = ['name'];

    // Une catégorie a plusieurs articles
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
