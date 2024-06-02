<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class navbarComponentProfs extends Component
{
    /**
     * Create a new component instance.
     */
    public $teacher;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->teacher = Auth::guard('teacher')->user();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar-component-profs');
    }
}
