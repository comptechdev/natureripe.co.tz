<?php

namespace App\View\Components\UI\Core;

use Illuminate\View\Component;

class Button extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $href;
    public $type;

    public function __construct($title=null, $href=null, $type=null)
    {
        //
        $this->title = $title??"Button";
        $this->href = $href??"#";
        $this->type = $type??"button";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.core.button');
    }
}
