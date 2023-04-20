<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formShow() {
        return view('form');
    }

    public function formCreate(Request $request) {
        $title = $request->input('title');
        $article = $request->input('article');
        $author = $request->input('author');

        $article = Article::create([
            'title' => $title,
            'article' => $article,
            'author' => $author,
        ]);

        return redirect()->route('homepage')->with('message', 'Article inserted successfully');

    }
}
