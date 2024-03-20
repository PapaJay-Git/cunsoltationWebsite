<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ClientCardComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $clientName;
    public $clientLogo;
    public $classIdentifier;

    public function __construct($clientName, $clientLogo, $classIdentifier)
    {
        $this->clientName = $clientName;
        $this->clientLogo = $clientLogo;
        $this->classIdentifier = $classIdentifier;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.client-card-component');
    }
}
