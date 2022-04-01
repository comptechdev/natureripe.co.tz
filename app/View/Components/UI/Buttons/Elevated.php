<?php

namespace App\View\Components\UI\Buttons;

use App\View\Components\UI\Core\Button;
use Illuminate\View\Component;

class Elevated extends Button
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    // public function __construct($title=null)
    // {
    //     //
    //     parent::__construct($title);
    // }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.buttons.elevated');
    }
}
