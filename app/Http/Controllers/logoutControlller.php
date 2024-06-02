<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class logoutControlller extends Controller
{
    // // Ensure this controller uses the auth middleware if it's not already set
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    // public function logout(Request $request)
    // {
    //     Auth::guard('teacher')->logout();
        
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return redirect('/login');
    //     // echo "logout controller";
    // }
    public function __construct()
    {
        $this->middleware('auth:web')->only('studentLogout');
        $this->middleware('auth:teacher')->only('teacherLogout');
    }

    public function StudentLogout(Request $request)
    {
        Auth::guard('web')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


    /**
     * Log the teacher out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function teacherLogout(Request $request)
    {
        Auth::guard('teacher')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
