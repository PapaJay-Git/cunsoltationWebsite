<?php

namespace App\View\Components\Services;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServiceComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $serviceName;
    public $description;
    public $imageBackground;
    public $classIdentifier;
    public $isReverse;

    public function __construct($serviceName, $description, $imageBackground, $classIdentifier, $isReverse)
    {
        $this->serviceName = $serviceName;
        $this->description = $description;
        $this->imageBackground = $imageBackground;
        $this->classIdentifier = $classIdentifier;
        $this->isReverse = $isReverse;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.services.service-component');
    }
}
