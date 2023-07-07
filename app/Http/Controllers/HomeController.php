<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\User;
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
    public function userShow($username){
        $user = User::with('professional')->with('client')->whereUsername($username)->firstOrFail();
        return view('professional.show',compact('user'));
        
    }
}
