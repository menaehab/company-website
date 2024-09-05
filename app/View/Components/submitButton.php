<?php

namespace App\View\Components;

use Illuminate\View\Component;

class submitButton extends Component
{
    public function __construct(public string $text)
    {
        //
    }

    public function render()
    {
        return view('components.submit-button');
    }
}
