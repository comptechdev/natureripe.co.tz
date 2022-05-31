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
        $this->products = Product::whereNotNull("picture_one")->whereNotNull("picture_two")->whereNotNull("picture_three")->whereNotNull("picture_four")->get();
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
