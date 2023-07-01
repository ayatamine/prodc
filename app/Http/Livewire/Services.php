<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination;

    public function paginationView()
    {
        return 'livewire.custom-pagination';
    }
    public function render()
    {
        return view('livewire.services')->extends('layous.app');
    }
}
