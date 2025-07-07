<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Lesson extends Component
{
     public  $lessons;
    /**
     * Create a new component instance.
     */
    public function __construct(
        $lessons = []
    ){
        $this->lessons = $lessons;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.lesson');
    }
}
