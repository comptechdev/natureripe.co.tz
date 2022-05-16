<?php

namespace App\View\Components\website\body;

use App\Models\Product;
use Illuminate\View\Component;

class slider extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $products;

    public function __construct()
    {
        //
        $this->products = Product::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.website.body.slider');
    }
}
