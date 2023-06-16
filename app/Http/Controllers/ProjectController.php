<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    public function index(Request $request): Response
    {
        $projects = Project::all();

        return view('project.index', compact('skills'));
    }

    public function show(Request $request, Project $project): Response
    {
        return view('project.show');
    }
}
