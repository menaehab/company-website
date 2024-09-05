<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class actionButton extends Component
{
    public string $color;
    public bool $small;

    /**
     * Create a new component instance.
     */
    public function __construct(public string $href, public string $type)
    {
        $this->color = '';
        $this->small = false;

        if ($this->type === 'create') {
            $this->color = 'primary';
        } elseif ($this->type === 'show') {
            $this->color = 'primary';
            $this->small = true;
        } elseif ($this->type === 'edit') {
            $this->color = 'warning';
            $this->small = true;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action-button');
    }
}
