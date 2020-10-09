<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
class ArticleController extends Controller
{
    public function __invoke($id){
        $article = Article::find($id);
        return view('Article', ['id'=>$id])->with(compact('article'));
    
    }
}
