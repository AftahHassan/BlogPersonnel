<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicArticleController extends Controller
{
    public function index(Request $request)
    {
        // Pour l'instant on retourne une vue vide
        return view('articles.index');
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }
}
