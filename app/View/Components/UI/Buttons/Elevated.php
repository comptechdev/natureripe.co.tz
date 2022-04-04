<?php

namespace App\View\Components\UI\Buttons;

use App\View\Components\UI\Core\Button;
use Illuminate\View\Component;

class Elevated extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title, $href, $type;

    public function __construct($title=null, $href=null, $type=null)
    {
        //
        $this->title = $title;
        $this->href = $href;
        $this->type = $type;
    }

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
