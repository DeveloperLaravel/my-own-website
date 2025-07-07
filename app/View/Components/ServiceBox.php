<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServiceBox extends Component
{
    public $title;
    public $image;
    public $route;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $image, $route)
    {
        $this->title = $title;
        $this->image = $image;
        $this->route = $route;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.service-box');
    }
}
