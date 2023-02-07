<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AritcleController extends Controller
{
    //
    public function accueil()
    {
        $article = Article::paginate(5);
        return view('accueil',[
            'articles'=>$article
        ]);
    }
    public function store(Article $article , ArticleRequest $request)
    {
         Article::create([
            'tilte' => $request->title,
            'description' =>$request->description,
            'user_id'=> Auth::id()
         ]);
         return redirect()->back()->with('succes','Nouvelle Article Inserer');
    }
    public function show(Article $article)
    {
       return view('articles.show',[
        'article'=>$article
       ]);
    }
    public function edit(Article $article)
    {
        return view('articles.edit',[
            'article'=>$article
        ]);
    }
    public function update(Article $article, ArticleRequest $request)
    {
        $article->tilte = $request->title;
        $article->description = $request->description;

        $article->save();
        return redirect('/accueil')->with('succes','article modifier');
    }
    public function delete(Article $article)
    {
        $article->delete();
         return redirect('/accueil')->with('succes','article suprimmer');
    }
    public function mine()
    {
        //dd(Auth::id());
        $myArticles = Article::where('user_id',Auth::id())->get();
      
        return view('articles.myArticles',[
            'myArticles'=>$myArticles
        ]);
    }
}
