<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LanguageController extends Controller
{
    public function index(Request $request): Response
    {
        $languages = Language::all();

        return view('language.index', compact('laguages'));
    }
}
