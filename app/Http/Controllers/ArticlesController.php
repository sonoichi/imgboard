<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Article;

class ArticlesController extends Controller
{
    public function index() {
        //$articles = Article::all();
        //$articles = Article::latest('published_at')->get();
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
   }

    public function create(){
        return view('articles.create');
    }

    public function store(){
        $inputs = \Request::all(); // 1

        Article::create($inputs); // 2

        return redirect('articles'); // 3
    }

    


}
