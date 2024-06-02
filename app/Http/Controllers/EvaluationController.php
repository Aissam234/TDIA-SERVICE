<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index()
    {
        $evaluations = Evaluation::where('hidden', false)
            ->where('user_id', auth()->id())
            ->get();
        return view('student.evaluation', compact('evaluations'));
    }

    public function index2()
    {
        $teacher = auth()->user(); // Assuming the authenticated user is a teacher
        $evaluations = Evaluation::where('hidden', false)
            ->where('teacher_id', $teacher->id)
            ->get();
        return view('profs.evaluation', compact('evaluations'));
    }

    public function create()
    {
        // Retrieve all teacher names
        $teachers = Teacher::select('id', 'name', 'family_name')->get();

        $evaluations = Evaluation::where('user_id', auth()->id())
            ->where('hidden', false)
            ->get();
        return view('student.evaluationCreate', compact('evaluations', 'teachers'));
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'evaluation' => 'required|string',
            'rating' => 'required|integer|min:0|max:10',
            'difficulties' => 'nullable|string',
            'problems' => 'nullable|string',
            'teacher_id' => 'required|exists:teachers,id'
            
        ]);

        $teacher = Teacher::where('id', $request->teacher_id)->first();

        if (!$teacher) {
            return redirect()->back()->withErrors(['teacher_id' => 'The specified teacher does not exist in our records.']);
        }

        $evaluation = new Evaluation();
        $evaluation->evaluation = $request->evaluation;
        $evaluation->rating = $request->rating;
        $evaluation->difficulties = $request->difficulties;
        $evaluation->problems = $request->problems;
        $evaluation->teacher_id = $teacher->id;
        $evaluation->user_id = auth()->id();
        $evaluation->save();

        return redirect()->route('student.evaluation.create')->with('success', 'Evaluation submitted successfully!');
    }

    public function hide(Request $request)
    {
        $request->validate([
            'hide_evaluations' => 'required|array',
            'hide_evaluations.*' => 'exists:evaluations,id'
        ]);

        Evaluation::whereIn('id', $request->input('hide_evaluations'))
            ->where('user_id', auth()->id())
            ->update(['hidden' => true]);

        return redirect()->back()->with('success', 'Selected evaluations have been hidden!');
    }
}
