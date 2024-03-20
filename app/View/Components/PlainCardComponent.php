<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PlainCardComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $colSpanBreakPoints;
    public $classIdentifier;
    public $cardLogo;
    public $title;
    public $description;

    public function __construct($colSpanBreakPoints, $classIdentifier, $cardLogo, $title, $description)
    {
        $this->colSpanBreakPoints = $colSpanBreakPoints;
        $this->classIdentifier = $classIdentifier;
        $this->cardLogo = $cardLogo;
        $this->title = $title;
        $this->description = $description;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.plain-card-component');
    }
}
