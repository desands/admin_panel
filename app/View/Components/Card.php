<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $icon;
    public $title;
    public $detail;
    /**
     * Create a new component instance.
     */
    public function __construct($icon,$title,$detail)
    {
        $this->icon = $icon;
        $this->title = $title;
        $this->detail = $detail;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
