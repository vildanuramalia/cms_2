<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
class ManageController extends Controller
{

    public function __construct(){
        // $this->middleware('auth');
        $this->middleware(function($request, $next){
            if(Gate::allows('Manage')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
            });

    }
    public function index(){
        return view('Manage.Manage');
    }
    public function manage(){
        $article = Article::all();
        return view('Manage.Manage', ['article' => $article]);
    }
    public function add(){
        return view('Manage.addArticle');
    }
    public function create(Request $request){
        Article::create([
        'title' => $request->title,
        'content' => $request->content,
        'featured_image' => $request->image
    ]);
        return redirect('/Manage');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('Manage.editArticle',['article'=>$article]);
    }
    public function update($id, Request $request){
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->featured_image = $request->image;
        $article->save();
        return redirect('/Manage');
    }
    public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/Manage');
    }
}