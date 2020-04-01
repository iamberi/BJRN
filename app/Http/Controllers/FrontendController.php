<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Article;
use App\User;


class FrontendController extends Controller
{
    public function index(Article $articles)
    {
        return view('frontend.index', compact('articles'));
    }

    public function show(Article $article)
     {
         return view('frontend.show', compact('article'));
     }

     public function check(Request $request)
     {
         if(Auth::check() && Auth::user()->authorizeRoles(['admin'])){
             return redirect('article');
         }else{
             return redirect('/');
         }
     }
}
