<?php

namespace App\Http\Controllers;

use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SpecialityController extends Controller
{
    public function index(Request $request): Response
    {
        $specialities = Speciality::all();

        return view('speciality.index', compact('specialities'));
    }

    public function show(Request $request, Speciality $speciality): Response
    {
        return view('speciality.show');
    }
}
