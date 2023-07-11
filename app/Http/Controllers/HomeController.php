<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\User;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
        $user = User::with('professional')->with('client')->with('skills')->whereUsername($username)->firstOrFail();
        return view('professional.show',compact('user'));  
    }
    public function categories(){
        // $specialities = Cache::remember('jobs', 540, function () {
            $specialities = Speciality::with('jobs')->withCount('jobs')
            ->orderBy('jobs_count', 'desc')->get()->toArray();
        // });
        return view('categories',compact('specialities'));
    }
}
