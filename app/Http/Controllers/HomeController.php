<?php

namespace App\Http\Controllers;

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
}
