<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use App\Models\Filliere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class noteController extends Controller
{
    public function create()
    {
        $fillieres = Filliere::all();
        return view('notes.create', compact('fillieres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'filliere_id' => 'required|exists:fillieres,id',
            'note' => 'required|string',
        ]);

        $students = User::where('filliere_id', $request->filliere_id)->get();

        foreach ($students as $student) {
            Note::create([
                'teacher_id' => Auth::id(),
                'filliere_id' => $request->filliere_id,
                'user_id' => $student->id,
                'note' => $request->note,
            ]);
        }

        return back()->with('success', 'Notes sent successfully!');
    }
}
