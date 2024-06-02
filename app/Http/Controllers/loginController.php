<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Teacher;

class loginController extends Controller
{

    public function LoginPost(Request $request){
    
        $InputCredentials = $request->validate([
            'firstPartEmail' => 'required',
            'password' => 'required',
            'email_domain' => 'required',
            
        ]);


        $emailDomain = $request->input('email_domain');
        $firstPartEmail = $request->input('firstPartEmail');
        $accEmail = $firstPartEmail . $emailDomain;
        $password = $request->input('password');

        // $password = crypt::encrypt($password);

        $credentials = [
            'email' => $accEmail,
            'password' => $password
        ];

         // Check email domain and authenticate accordingly
        if ($emailDomain === '@etu.uae.ac.ma') {
            // Check in users table
            if (Auth::guard('web')->attempt($credentials)) {
                // return redirect()->intended('student');
                return redirect('/student')->with('success', 'Login student');
            } else {
                return back()->withErrors([
                    'email' => 'Incorrect Email or password.',
                ]);
        
            }
        } elseif ($emailDomain === '@uae.ac.ma') {
            // Check in teachers table
            if (Auth::guard('teacher')->attempt($credentials)) {
                return redirect('/profs')->with('success', 'Login Teacher');
            } else {
                return back()->withErrors([
                    'email' => 'Incorrect Email or password.',
                ]);
            }
        } else {
            return back()->withErrors([
                'email_domain' => 'Invalid email domain.',
            ]);
        }

    }
   

}
