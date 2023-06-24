<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class MyVerifications extends Component
{
    public function render()
    {
        return view('livewire.my-verifications')->extends('layouts.dashboard');
    }
}
