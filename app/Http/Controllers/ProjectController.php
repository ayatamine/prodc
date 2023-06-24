<?php

namespace App\Http\Controllers;

use index;
use App\Models\Skill;
use App\Models\Project;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::all();

        return view('project.index', compact('skills'));
    }
    public function create()
    {
        $skills = Cache::remember('skills',3500,function(){
                return Skill::get(); 
        }) ;
        return view('project.create', compact('skills'));
    }

    public function show(Request $request, Project $project)
    {
        return view('project.show');
    }
}
