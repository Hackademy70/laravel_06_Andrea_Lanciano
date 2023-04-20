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
        
        $img = $request->file('img')->store('public/article');
        $title = $request->input('title');
        $article = $request->input('article');
        $author = $request->input('author');
        $subtitle = $request->input('subtitle');

        $article = Article::create([
            'title' => $title,
            'article' => $article,
            'subtitle' => $subtitle,
            'img' => $img,
            'author' => $author,
        ]);

        return redirect()->route('homepage')->with('message', 'Article inserted successfully');

    }
}
