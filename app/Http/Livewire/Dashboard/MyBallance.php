<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class MyBallance extends Component
{
    public function render()
    {
        return view('livewire.my-ballance')->extends('layouts.dashboard');
    }
}
