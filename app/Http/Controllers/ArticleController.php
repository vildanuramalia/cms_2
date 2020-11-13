<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use PDF;

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
        if(Gate::allows('Manage')) return $next($request);
        abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function index(){
        $article = Article::all();
        return view('Manage',['article' => $article]);
    }
    public function add(){
        return view('addarticle');
    }
    public function create(Request $request){
        if($request->file('image')){
            $image_name = $request->file('image')->store('images','public');
        }
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' => $image_name,
            ]);
            return redirect('/Manage');
        }
    //public function create(Request $request){
      //  Article::create([
        //    'title' => $request->title,
          //  'content' => $request->content,
           // 'featured_image' => $request->image,
           // 'result' => $request->result,
           // 'order' => $request->order
        //]);
        // echo "<pre>"; print_r($article); die;
        //return redirect('/manage');
    //}
    public function edit($id){
        $article = Article::find($id);
        return view('editarticle',['article'=>$article]);
    }
    public function update($id, Request $request){
        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        if($article->featured_image && file_exists(storage_path('app/public/' . $article->featured_image)))
        {
            \Storage::delete('public/'.$article->featured_image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $article->featured_image = $image_name;
        $article->save();
        return redirect('/Manage');
    }
    //public function update($id, Request $request){
      //  $article = Article::find($id);
      //  $article->title = $request->title;
      //  $article->content = $request->content;
      //  $article->featured_image = $request->image;
      //  $article->result = $request->result;
      //  $article->order = $request->order;
       // $article->save();
        // echo "<pre>"; print_r($article); die;
      //  return redirect('/manage');
 //}
        public function delete($id){
        $article = Article::find($id);
        $article->delete();
        return redirect('/Manage');
    }
    public function cetak_pdf(){
        $article = Article::all();
        $pdf = PDF::loadview('articles_pdf',['article'=>$article]);
        return $pdf->stream();
       }

}
