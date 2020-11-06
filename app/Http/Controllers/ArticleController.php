<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{

    public function viewArticles($id){
        $article = Article::find($id);
        $article = json_decode(json_encode($article));
        return view('articleku',['id'=> $id])->with(compact('article'));
    }
    public function __construct(){
        //$this->middleware('auth');
        $this->middleware(function($request, $next){
        if(Gate::allows('manage')) return $next($request);
        abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function index(){
        $article = Article::all();
        return view('manage',['article' => $article]);
    }
    public function add(){
        return view('addarticle');
    }
    public function create(Request $request){
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' => $request->image,
            'result' => $request->result,
            'order' => $request->order
        ]);
        // echo "<pre>"; print_r($article); die;
        return redirect('/manage');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('editarticle',['article'=>$article]);
    }
    public function update($id, Request $request){
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->featured_image = $request->image;
        $article->result = $request->result;
        $article->order = $request->order;
        $article->save();
        // echo "<pre>"; print_r($article); die;
        return redirect('/manage');
 }
        public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/manage');
 }

}
