<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    public function edit(Article $article){
        return view('singlecard.edit', compact('article'));
    }

    public function update(Request $request, Article $article){

        $oldImg = $article->img;

        $article->update([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'author' => $request->input('author'),
            'article' => $request->input('article'),
            'img' => ($request->file('img') == null) ? $article->img : $request->file('img')->store('public/article'),
        ]);

        if ($request->file('img') !== null){
            Storage::delete($oldImg);
        }

        return redirect()->route('homepage')->with('message', "Article successfully edited");
    }
}
