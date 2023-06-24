<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class MyProjects extends Component
{
    public function render()
    {
        return view('livewire.my-projects')->extends('layouts.dashboard');
    }
}
