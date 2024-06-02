<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Note;

class UserNoteController extends Controller
{
    public function showNotes()
    {
        // Assuming the logged-in user is a student
        $user = Auth::user();

        // Fetch notes for the logged-in student along with the module and filliere details
        $notes = Note::with('module', 'filliere')
            ->where('user_id', $user->id)
            ->get();

        return view('student.form-basic', compact('notes'));
    }
}

