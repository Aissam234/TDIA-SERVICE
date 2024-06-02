<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class navbarComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('components.navbar-component');
    }
}
