<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Absence;
use Illuminate\Support\Facades\Auth;

class AbsenceController extends Controller
{
    public function index(Request $request)
    {
        $teacher = Auth::user();
        // Load modules with filliere and users in a single query
        $modules = Module::with(['filliere.users'])
                         ->where('teacher_id', $teacher->id)
                         ->get();

        $date = now(); // or any specific date you want to use for the absence management
        $absences = Absence::whereIn('module_id', $modules->pluck('id'))->get();

        return view('profs.abscence', compact('modules', 'date', 'absences'));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $moduleId = $data['module_id'];
        $month = $data['month'];

        foreach ($data['absences'] as $studentId => $days) {
            foreach ($days as $day => $value) {
                Absence::create([
                    'student_id' => $studentId,
                    'module_id' => $moduleId,
                    'absence_date' => "$month-$day",
                ]);
            }
        }

        return redirect()->back()->with('success', 'Absences enregistrées avec succès');
    }
}
