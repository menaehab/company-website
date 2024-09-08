<?php

namespace App\View\Components;

use Closure;
use App\Models\Team;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class FrontTeam extends Component
{
    public $teams;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->teams = Team::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.front-team');
    }
}