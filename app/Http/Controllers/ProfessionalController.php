<?php

namespace App\Http\Controllers;

use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfessionalController extends Controller
{
     /** @return the professionals page */
     public function index()
     {
         return view('professional.index');
     }
}
