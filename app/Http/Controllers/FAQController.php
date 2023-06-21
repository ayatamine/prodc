<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FAQController extends Controller
{
    public function index(Request $request): Response
    {
        $fAQS = FAQ::all();

        return view('faq.index', compact('faqs'));
    }

    public function show(Request $request, FAQ $fAQ): Response
    {
        return view('faq.show');
    }
}
