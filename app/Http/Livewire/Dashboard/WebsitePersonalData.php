<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class WebsitePersonalData extends Component
{
    public function render()
    {
        return view('livewire.website-personal-data')->extends('layouts.dashboard');
    }
}
