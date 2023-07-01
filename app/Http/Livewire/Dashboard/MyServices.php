<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithPagination;

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
            'services'=> client_auth()?->projects()->paginate(10)
        ])->extends('layouts.dashboard');
    }
}
