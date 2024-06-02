<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\User;
use App\Models\Module;
use App\Models\Filliere;
use Illuminate\Http\Request;

class TeacherNotesController extends Controller
{
    
    public function showNotesPage()
{
    // Get the currently authenticated teacher
    $teacher = auth()->user();

    // Retrieve the fillieres associated with the teacher
    $filliereIds = explode('-', $teacher->filieres);

    // Retrieve the filliere names based on the filliere IDs
    $fillieres = Filliere::whereIn('id', $filliereIds)->get();

    // Pass the fillieres to the view
    return view('profs.datatable', compact('fillieres'));
}

    public function getStudentsByFilliere($filliereId)
    {
        $students = User::where('filliere_id', $filliereId)->get();

        $teacherId = auth()->user()->id;
       
        $modules = Module::where('filliere_id', $filliereId)->where('teacher_id', $teacherId)->get();

        return response()->json(['users' => $students, 'modules' => $modules]);
    }

    public function sendNotes(Request $request)
    {
        $request->validate([
            'filliere_id' => 'required|exists:fillieres,id',
            'module_id' => 'required|exists:modules,id',
            'user_ids' => 'required|array',
            'user_ids.*' => 'exists:users,id',
            'notes' => 'required|array',
            'notes.*' => 'required|numeric|between:0,20',
        ]);


        foreach ($request->user_ids as $key => $userId) {
            $note = new Note();
            $note->filliere_id = $request->filliere_id;
            $note->module_id = $request->module_id;
            $note->user_id = $userId;
            $note->note = $request->notes[$key];
            $note->save();
        }

        return redirect()->back()->with('success', 'Notes sent successfully');
    }
}

