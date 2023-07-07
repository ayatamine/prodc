<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /** @return the home page */
    public function index()
    {
        return view('home');
    }
    /** @return the professinoal plans */
    public function packages()
    {
        return view('package.packages');
    }
    /** @return the professinoal plans */
    public function subscribeToPackage($id)
    {
        return view('package.buy_package');
    }
    public function charter(){
        return view('charter');
    }
    public function pages($slug){
        $page =Page::whereSlug($slug)->firstOrFail();
        return view('page',compact('page'));
    }
}
