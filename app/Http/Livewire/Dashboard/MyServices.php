<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Cache;

class MyServices extends Component 
{
    use WithPagination;

    public function paginationView()
    {
        return 'livewire.custom-pagination';
    }
    public function render()
    {
        // $services = $this->services;
        return view('livewire.my-services',[
            'services'=> client_auth()?->projects()->paginate(1)
        ])->extends('layouts.dashboard');
    }
}
