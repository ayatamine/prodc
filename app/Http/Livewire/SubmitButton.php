<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SubmitButton extends Component
{
    public $target,$title,$extraClasses;
    public function mount($target=null,$title,$extraClasses=null){
        $this->target = $target;
        $this->title = $title;
        $this->extraClasses = $extraClasses;
    }
    public function render()
    {
        return view('livewire.submit-button');
    }
}
