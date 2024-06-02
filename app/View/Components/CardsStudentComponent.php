<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserInfo extends Component
{
    public $user;
    public $filliere;
    public $userCount;

    public function __construct()
    {
        $this->user = Auth::user();
        $this->filliere = $this->user->filliere->name ?? 'No Filliere';
        $this->userCount = User::count();
    }

    public function render()
    {
        return view('components.cards-student-component');
    }
}
