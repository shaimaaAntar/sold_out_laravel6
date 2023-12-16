<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function home()
    {
        $cats=category::all();
        return view('front.index',compact('cats'));
    }
    public function cat($id){
        $allCat=category::all();
        $cat=category::all()->find($id);
        return view('front.category',compact('cat','allCat'));

    }

}
