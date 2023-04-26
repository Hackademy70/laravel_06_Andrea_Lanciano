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
            $img = 'default.jpeg';
        } else {
            $img = $request->file('img')->store('public/article');
        }

        if($request->file('img2') == null) {
            $img2 = 'default.jpeg';
        } else {
            $img2 = $request->file('img2')->store('public/article');
        }


        
        $article = Article::create([
            'title' => $request->input('title'),
            'paragraph' => $request->input('paragraph'),
            'subtitle' => $request->input('subtitle'),
            'paragraph2' => $request->input('paragraph2'),
            'subtitle2' => $request->input('subtitle2'),
            'img' => $img,
            'img2' => $img2,
            'author' => $request->input('author'),
        ]);

        return redirect()->route('homepage')->with('message', 'Article inserted successfully');

    }

    public function edit(Article $article){
        return view('singlecard.edit', compact('article'));
    }

    public function update(Request $request, Article $article){

        $oldImg = $article->img;

        $oldImg2 = $article->img2;

        $article->update([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'subtitle2' => $request->input('subtitle2'),
            'author' => $request->input('author'),
            'paragraph' => $request->input('paragraph'),
            'paragraph2' => $request->input('paragraph2'),
            'img' => ($request->file('img') == null) ? $article->img : $request->file('img')->store('public/article'),
            'img2' => ($request->file('img2') == null) ? $article->img2 : $request->file('img2')->store('public/article'),
        ]);

        if ($request->file('img') !== null){
            Storage::delete($oldImg);
        }

        if ($request->file('img2') !== null){
            Storage::delete($oldImg2);
        }

        return redirect()->route('homepage')->with('message', "Article $article->title successfully edited");
    }

    public function delete(Article $article){
        Storage::delete($article->img);
        Storage::delete($article->img2);
        $article->delete();
        return redirect()->route('homepage');
    }
    public function firstDelete(Article $firstArticle){
        Storage::delete($firstArticle->img);
        Storage::delete($firstArticle->img2);
        $firstArticle->delete();
        return redirect()->route('homepage');
    }
}
