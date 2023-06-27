<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class MyServices extends Component 
{

    public function render()
    {
        return view('livewire.my-services')->extends('layouts.dashboard');
    }
}
