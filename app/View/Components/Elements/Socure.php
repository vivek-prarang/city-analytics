<?php

namespace App\View\Components\Elements;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Socure extends Component
{
    /**
     * Create a new component instance.
     */
    public $value;
    public $addTitle;
    public $showTitle;
    public $showSource;
    public function __construct($value, $showTitle = true, $showSource = true, $addTitle = null)
    {
        $this->value = $value;
        $this->showTitle = $showTitle;
        $this->showSource = $showSource;
        $this->addTitle = $addTitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.elements.socure');
    }
}
