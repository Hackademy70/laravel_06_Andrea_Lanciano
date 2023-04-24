<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage() {
        $firstArticle = Article::all()->sortBy('id')->last();
        $articles = Article::all()->sortBy('id');
        return view('welcome', ['articles' => $articles, 'firstArticle' => $firstArticle]);
    }

    public function show(Article $article) {
        return view('singlecard.show', compact('article'));
    }
}
