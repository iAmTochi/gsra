<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleTag;
use Illuminate\Http\Request;

class HomeArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::query()->simplePaginate(12);
        return view('home.article.index', compact('articles'));
    }


    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $categories = ArticleCategory::all();
        $tags       = ArticleTag::all();
        return view('home.article.show', compact(['article','categories','tags']));
    }


}
