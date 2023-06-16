<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SkillController extends Controller
{
    public function index(Request $request): Response
    {
        $skills = Skill::all();

        return view('skill.index', compact('skills'));
    }

    public function show(Request $request, Skill $skill): Response
    {
        return view('skill.show');
    }
}
