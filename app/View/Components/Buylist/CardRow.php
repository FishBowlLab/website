<?php

namespace App\View\Components\Buylist;

use Illuminate\View\Component;

class CardRow extends Component
{
    public $data;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $data)
    {
        //
        $this->name=$name;
        $this->data=$data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.buylist.card-row');
    }
}
