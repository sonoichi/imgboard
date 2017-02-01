<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Article;
use App\Http\Requests\ArticleRequest;
use Session;

class ArticlesController extends Controller
{
    public function index() {
        //$articles = Article::all();
        //$articles = Article::latest('published_at')->get();
        //$articles = Article::latest('published_at')->where('published_at', '<=', Carbon::now())->get();
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

    public function store(ArticleRequest $request){
        // $rules = [
        //     'title' => 'required|min:3',
        //     'body' => 'required',
        //     'published_at' => 'required|date',
        // ];
        //$this -> validate($request, $rules);
        //$inputs = \Request::all(); // フォームの取得
        //Article::create($inputs); // マスアサイメント、記事をDBに作成
        Article::create($request->all());
        Session::flash('flash_message', '記事を追加しました。');
        //return redirect('articles'); // 記事一覧へリダイレクト
        return redirect()->route('articles.index');
    }

    public function edit($id) {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }
 
    public function update($id, ArticleRequest $request) {
        $article = Article::findOrFail($id); 
        $article->update($request->all());
        Session::flash('flash_message', '記事を更新しました。');
        //return redirect(url('articles', [$article->id]));
        return redirect()->route('articles.show', [$article->id]);
    }

    public function destroy($id) {
        $article = Article::findOrFail($id);
        $article->delete();
        \Session::flash('flash_message', '記事を削除しました。');  // 一回きりのメッセージ
        return redirect('articles');
    }


}
