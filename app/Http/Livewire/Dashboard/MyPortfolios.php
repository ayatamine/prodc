<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class MyPortfolios extends Component
{
    public function render()
    {
        return view('livewire.my-portfolios')->extends('layouts.dashboard');
    }
}
