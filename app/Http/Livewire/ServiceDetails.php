<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ServiceDetails extends Component
{
    public $service;
    public $first_step,$second_step,$third_step,$fourth_step =false;

    public function mount($service)
    {
        $this->$service = $service;
        switch ($service->timeline_point) {
            case 'published':
                $this->second_step =true;
                break;
            case 'processing':
                $this->third_step =true;
            
            case 'finished':
                $this->fourth_step =true;
            
            default:
                $this->first_step=false;
                $this->second_step =false;
                $this->third_step =false;
                $this->fourth_step =false;
                break;
        }
    }
    public function render()
    {
        return view('livewire.service-details');
    }
}
