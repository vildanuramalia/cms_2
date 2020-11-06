<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;


class HomesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function __invoke(){
        Cache::remember('article', 10, function(){
            return Article::all();

    });
        $article = Cache::get('article');
        return view('Homes')->with(compact('article'));
    }
}
