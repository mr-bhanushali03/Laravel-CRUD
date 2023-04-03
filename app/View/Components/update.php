<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class update extends Component
{
    public $type;
    public $name;
    public $label;
    public $placeholder;
    public $value;
    /**
     * Create a new component instance.
     */
    public function __construct($type,$name,$label,$placeholder,$value)
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.update');
    }
}
