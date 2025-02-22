<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormDropDown extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public array $items,
        public string $name,
        public string $current,
        public string $form
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form-drop-down');
    }
}
