<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Module;
use App\Models\Report;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class indexProfController extends Controller
{
    public function indexProf()
    {
        $teacher = auth()->user(); // Assuming the authenticated user is a teacher
        $evaluations = Evaluation::where('hidden', false)
            ->where('teacher_id', $teacher->id)
            ->get();

        $evaluationsCount = Evaluation::where('hidden', false)
            ->where('teacher_id', $teacher->id)
            ->count(); 

        $modulesCount = Module::where('teacher_id', $teacher->id)
            ->whereNotNull('Data')
            ->where('Data', '!=', '')
            ->count();
        
        $ReportCount = Report::whereNotNull('file_path')
            ->where('file_path', '!=', '')
            ->count();

        $teacherCount = Teacher::count(); 

        return view('profs.index', compact('teacherCount','evaluationsCount','evaluations', 'modulesCount', 'ReportCount'));
    }
}
