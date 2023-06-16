<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfessionalController extends Controller
{
    public function index(Request $request): Response
    {
        $professionals = Professional::all();

        return view('professional.index', compact('professionals'));
    }

    public function show(Request $request, Professional $professional): Response
    {
        return view('professional.show');
    }
}
