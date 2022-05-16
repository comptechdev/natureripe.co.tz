<?php

namespace App\View\Components\website\body;

use App\Models\Meal;
use Illuminate\View\Component;

class section extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $meals;
    public function __construct()
    {
        //
        $this->meals = Meal::paginate();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.website.body.section');
    }
}
