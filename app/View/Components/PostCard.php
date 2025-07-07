<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Carbon\Carbon;

class PostCard extends Component
{
    public $image;
    public $category;
    public $title;
    public $link;
    public $authorImage;
    public $authorName;
    public $date;
    /**
     * Create a new component instance.
     */
     public function __construct(
        $image,
        $category,
        $title,
        $link,
        $authorImage,
        $authorName,
        $date
    ) {
        $this->image = $image;
        $this->category = $category;
        $this->title = $title;
        $this->link = $link;
        $this->authorImage = $authorImage;
        $this->authorName = $authorName;
        $this->date = Carbon::parse($date)->diffForHumans();
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.post-card');
    }
}
