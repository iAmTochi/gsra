<?php

namespace App\Http\Controllers;

use App\Models\ArticleTag;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleTagController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('admin.article.tags.index')
            ->with('tags', ArticleTag::all());
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.article.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:article_categories'
        ]);
        ArticleTag::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        session()->flash('success', 'Tag created successfully');

        return to_route('article-tags.index');
    }


    /**
     * @param ArticleTag $articleTag
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(ArticleTag $articleTag)
    {
        return view('admin.article.tags.create')->with('tag', $articleTag);
    }

    /**
     * @param Request $request
     * @param ArticleTag $articleTag
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, ArticleTag $articleTag)
    {
        $articleTag->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        session()->flash('success', 'Tag updated successfully');

        return to_route('article-tags.index');
    }

    /**
     * @param ArticleTag $articleTag
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(ArticleTag $articleTag)
    {

        if ($articleTag->articles->count() > 0)
        {
            session()->flash('error', 'Tag cannot be deleted because it is associated to some posts.');
            return redirect()->back();
        }

        $articleTag->delete();

        session()->flash('success', 'Tag deleted successfully');

        return to_route('article-tags.index');
    }
}
