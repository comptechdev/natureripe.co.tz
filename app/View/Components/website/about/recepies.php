<?php

namespace App\View\Components\website\about;

use Illuminate\View\Component;

class recepies extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $background;
    public $title;
    public $titlestyle;
    public $description;
    public $descriptionstyle;
    public $bottle;
    public $height;
    public function __construct($background = null,$title="Title",$titlestyle="",$description="",$descriptionstyle="",$bottle="",$height="")
    {
        //
        $this->background = $background;
        $this->title = $title;
        $this->titlestyle = $titlestyle;
        $this->description = $description;
        $this->descriptionstyle = $descriptionstyle;
        $this->bottle = $bottle == "" ? asset('img/bt1.png') : $bottle;
        $this->height = $height;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.website.about.recepies');
    }
}
