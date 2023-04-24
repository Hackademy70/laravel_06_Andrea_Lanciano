<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    public function formShow() {
        return view('form');
    }

    public function formCreate(ArticleRequest $request) {

        if($request->file('img') == null) {
            $img = 'default.jpg';
        } else {
            $img = $request->file('img')->store('public/article');
        }


        
        $article = Article::create([
            'title' => $request->input('title'),
            'article' => $request->input('article'),
            'subtitle' => $request->input('subtitle'),
            'img' => $img,
            'author' => $request->input('author'),
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

        return redirect()->route('homepage')->with('message', "Article $article->title successfully edited");
    }

    public function delete(Article $article){
        Storage::delete($article->img);
        $article->delete();
        return redirect()->route('homepage')->with('message', "Article $article->title successfully deleted");
    }
}
