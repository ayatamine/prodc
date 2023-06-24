<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SubmitButton extends Component
{
    public $target,$title,$extraClasses;
    /**
     * Create a new component instance.
     */
    public function __construct($target=null,$title,$extraClasses=null)
    {
        $this->target = $target;
        $this->title = $title;
        $this->extraClasses = $extraClasses;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.submit-button');
    }
}
