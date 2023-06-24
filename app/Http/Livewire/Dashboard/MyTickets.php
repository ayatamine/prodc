<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class MyTickets extends Component
{
    public function render()
    {
        return view('livewire.my-tickets')->extends('layouts.dashboard');
    }
}
