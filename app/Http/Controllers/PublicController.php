<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        $articles = Article::all();
        return view('welcome', ['articles' => $articles]);
    }

    public function show(Article $article) {
        return view('singlecard.show', compact('article'));
    }
}
