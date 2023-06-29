<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Illuminate\Support\Facades\Cache;

class MyServices extends Component 
{
    protected $services;
    public function mount(){
        // $this->services = Cache::remember('my_services', 240, function () {
        $this->services =  client_auth()?->projects()->paginate(10);
        // });
    }
    public function render()
    {
        $services = $this->services;
        return view('livewire.my-services',compact('services'))->extends('layouts.dashboard');
    }
}
