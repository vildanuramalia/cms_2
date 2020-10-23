<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Komen;
use Illuminate\Support\Facades\Cache;
class ArticleController extends Controller
{
    public function articleID($id){
        $article = Article::find($id);
        return view('Article', ['id'=>$id])->with(compact('article'));
    
    }
    public function index(){
        $article = Article::all();
        return view('Kelola',['article' => $article]);
    }
    public function add(){
        return view('addArticle');
    }
    public function create(Request $request){
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' => $request->image
            ]);
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
            $article->save();
            return redirect('/manage');
        }
        public function delete($id){
            $article = Article::find($id);
            $article->delete();
            return redirect('/manage');
        }

        public function addKom($id, Request $request){
            $komens = new Komen;

            $komens->comment = $request->comment;
            $komens->id_user = $request->id_user;
            $komens->save();
            return redirect('/article/'.$id);
        }
}
