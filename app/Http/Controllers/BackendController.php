<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class BackendController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('CheckRole:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        $user->authorizeRoles(['admin']);
        return view('backend.dashboard');
    }

    public function settings()
    {
        $user = Auth::user();
        $user->authorizeRoles(['admin']);
        return view('backend.dashboard');
    }
}
