<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class PayCommission extends Component
{
    public function render()
    {
        return view('livewire.dashboard.pay-commision')->extends('layouts.dashboard');
    }
}
