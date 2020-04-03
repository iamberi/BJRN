<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Article $articles)
    {
        return view ('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $new_article = new Article();

        $new_article->article = $request->input('article');
        $new_article->description = $request->input('description');
        $new_article->price = $request->input('price');
        $new_article->user_id = $request->input('user_id');
        //$new_article->image = $request->input(['article' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048']);
/*
        $data = $request->validate([
            'article' => 'required',
            'description' => 'required',
            'price' => 'required',
            'user_id' => 'required |exists:users,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);*/

        if  ($request->hasfile('image')){
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("images"), $new_name);
            $new_article->image = $new_name;

            $new_article->save();
            $articles = Article::all();
           // Article::create($data);

            $request->session()->flash('message', 'Der Artikel wurde hinzugefügt.');
            return redirect(route('article.index'))->with('articles', $articles);
           // return redirect(route('article.index'))->with('path', $new_name);
        }        
       // $data->image = $new_name;
        //return back()->with('success', 'Das Bild wurde hinzugefügt')->with('path', $new_name);
       /*
        Article::create($data);
        $request->session()->flash('message', 'Der Artikel wurde hinzugefügt.');
        return redirect(route('article.index'));*/
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    public function delete(Article $article)
    {
        return view ('article.delete', compact('article'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view ('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Article $article)
    {
        $data = $this->validate(request(), [
            'article' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $article->update(request()->except('_token'));
        Session::flash('message','Artikel erolgreich bearbeitet!');
        return redirect(route('article.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        Session::flash('message', 'Artikel wurde gelöscht!');
        return redirect(route('article.index'));
    }
}
