<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LessonBox extends Component
{
    public $image;
    public $images;
    public $title;
    public $introLessons;
    public $mainTitle;
    public $mainLessons;
    public $footerText;
    public $video;
    /**
     * Create a new component instance.
     */
    public function __construct(
         $image = '',
         $images = '',
        $title = '',
        $introLessons = [],
        $mainTitle = '',
        $mainLessons = [],
        $footerText = '',
        $video = ''
    )
    {
        $this->image = $image;
        $this->images = $images;
        $this->title = $title;
        $this->introLessons = $introLessons;
        $this->mainTitle = $mainTitle;
        $this->mainLessons = $mainLessons;
        $this->footerText = $footerText;
        $this->video = $video;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.lesson-box');
    }
}
