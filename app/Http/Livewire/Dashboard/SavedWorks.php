<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithPagination;

class SavedWorks extends Component
{
    use WithPagination;

    public function paginationView()
    {
        return 'livewire.custom-pagination';
    }
    public function render()
    {
        // $services = $this->services;
        return view('livewire.dashboard.saved-works',[
            'works'=> client_auth()?->savedWorks()->paginate(10)
        ])->extends('layouts.dashboard');
    }

}
