<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Breadcrumb extends Component
{
    public $first_link,$first_link_title,$second_link_title;
    public function mount($first_link,$first_link_title,$second_link_title)
    {
       $this->first_link = $first_link;
       $this->first_link_title = $first_link_title;
       $this->second_link_title = $second_link_title;
    }
    public function render()
    {
        return view('livewire.breadcrumb');
    }
}
