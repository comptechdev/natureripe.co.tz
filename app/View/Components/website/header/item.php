<?php

namespace App\View\Components\website\header;

use Illuminate\View\Component;

class item extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $href;
    public $title;
    public $show;
    public function __construct($href="#", $title="Menu", $show="false")
    {
        //
        $this->href= $href;
        $this->title = $title;
        $this->show = $show == "false" ? false : $show;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.website.header.item');
    }
}
