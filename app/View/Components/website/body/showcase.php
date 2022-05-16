<?php

namespace App\View\Components\website\body;

use Illuminate\View\Component;

class showcase extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $product;
    public function __construct($product)
    {
        //
        $this->product = $product;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.website.body.showcase');
    }
}
