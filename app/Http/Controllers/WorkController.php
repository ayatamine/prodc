<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WorkController extends Controller
{
    public function index(Request $request): Response
    {
        $works = Work::all();

        return view('work.index', compact('skills'));
    }

    public function show(Request $request, Work $work): Response
    {
        return view('work.show', compact('job'));
    }
}
