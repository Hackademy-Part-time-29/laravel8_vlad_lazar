<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Author;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function showArticles(){
        $articles=Article::paginate(8);
        return view('articoli', compact('articles'));
    }
    public function showArticle($id){
        $article=Article::findOrFail($id);
        return view ('articolo',compact('article'));
    }
    public function store(StoreArticleRequest $request){
        $article=Article::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'author_id'=>$request->author_id
        ]);
        if($request->hasFile('cover')){
            $article->update([
                'cover'=>$request->file('cover')->storeAs('public/covers/'.$article->id,'cover.jpg')
            ]);
        }
        return redirect()->back()->with(['success'=>'Articolo inserito con successo']);
    }
    public function showArticlesByAuthor(Author $author){
        dd($author);
        $articles=$author->articles->sortByDesc('created_at');
        return view('articoli',compact('articles'));
    }
}
