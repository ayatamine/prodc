<?php

namespace App\Http\Controllers;

use index;
use App\Models\Skill;
use App\Models\Project as Service;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ServiceController extends Controller
{
    public function __construct()
    {
        //
    }
    public function index(Request $request)
    {
        return view('service.index');
    }
    public function create()
    {
        $skills = Cache::remember('skills',3500,function(){
                return Skill::get(); 
        }) ;
        return view('service.create', compact('skills'));
    }

    public function show(Service $service)
    {
        return view('service.show',compact('service'));
    }
}
