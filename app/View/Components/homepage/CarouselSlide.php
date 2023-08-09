<?php

namespace App\View\Components\homepage;

use Illuminate\View\Component;

class CarouselSlide extends Component
{
    public $img;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($img)
    {
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.homepage.carousel-slide');
    }
}
