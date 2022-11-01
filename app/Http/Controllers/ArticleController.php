<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\ArticleTag;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     *
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        return view('admin.article.index')->with('articles', Article::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        $categories = ArticleCategory::all();
        if($categories->count() < 1)
        {
            session()->flash('info', 'You need to have at least  an Article Category before creating an Article');
            return  to_route('article-categories.index');
        }

        $tags       = ArticleTag::all();

        return view('admin.article.create', compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // upload the image to storage
        $image = $request->image->store('articles');

        //print_r($request->published_at);die();

        $article = Article::create([
            'title'                 => $request->title,
            'content'               => $request->description,
            'image'                 => $image,
            'published_at'          => $request->published_at,
            'article_category_id'   => $request->category,
            'user_id'               => auth()->user()->id,
        ]);

        if($request->tags){

            $article->articleTags()->attach($request->tags);
        }

        // flash message

        session()->flash('success', 'Article created successfully');

        // redirect user

        return to_route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.article.create')
            ->with('article', $article)
            ->with('categories', ArticleCategory::all())
            ->with('tags', ArticleTag::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $data = $request->only(['title','published_at','content']);
        $data['content'] = $request->description;

        // check id new image
        if ($request->hasFile('image')){

            // upload it

            $image = $request->image->store('posts');

            // delete old one

            $article->deleteImage();

            $data['image'] = $image;
        }

        if($request->tags){

            $article->articleTags()->sync($request->tags); //sync helps for many to many relations
        }



        // update attribute

        $article->update($data);


        // flash message
        session()->flash('success', 'Article updated successfully');

        // redirect
        return to_route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::withTrashed()->where('id', $id)->firstOrFail();

        if ($article->trashed()){
            $article->deleteImage();
            $article->articleTags()->detach($article->articleTags);
            $article->forceDelete();
            session()->flash('success', 'Article Deleted successfully');
            return back();

        } else {
            $article->delete();
            session()->flash('success', 'Article trashed successfully');
            return redirect(route('articles.index'));
        }

    }
}
