<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Filliere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $fillieres = Filliere::all();
        return view('Sregister', compact('fillieres'));
    }

    public function registerPost(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z ]+$/u',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:20|confirmed',
            'filliere_id' => 'required|exists:fillieres,id',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->filliere_id = $request->filliere_id;
        $user->save();

        return back()->with('success', 'Registered successfully');
    }
    public function viewNotes()
    {
        $user = Auth::user();
        $notes = $user->notes; // Assuming you have defined the notes relationship in the User model
        $fillieres = Filliere::all(); // Retrieve fillieres from the database
        return view('student.form-basic', compact('notes', 'fillieres'));
    }
}