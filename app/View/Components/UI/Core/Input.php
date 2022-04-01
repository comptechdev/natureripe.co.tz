<?php

namespace App\View\Components\Ui\Core;

use Illuminate\View\Component;

class Input extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type, $name, $label, $value;

    public function __construct($type=null, $name=null, $label=null, $value=null)
    {
        //
        $this->type = $type??"text";
        $this->name = $name??"";
        $this->label = $label;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.core.input');
    }
}
