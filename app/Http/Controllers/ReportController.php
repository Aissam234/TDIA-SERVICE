<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use App\Models\Module;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ReportController extends Controller
{
    public function setDeadline(Request $request, Module $module)
    {
        $request->validate([
            'deadline' => 'required|date|after:now',
        ]);

        $module->deadline = $request->deadline;
        $module->save();

        return redirect()->back()->with('success', 'Deadline définie avec succès');
    }

    public function showUploadForm()
    {
        $user = Auth::user();
        $modules = $user->filliere->modules;

        return view('student.reports.upload', compact('modules'));
    }

    public function uploadReport(Request $request, Module $module)
    {
        if (!$module->deadline) {
            return redirect()->back()->withErrors(['error' => 'Le professeur n\'a pas encore défini la date limite pour ce module.']);
        }

        if ($module->deadline && $module->deadline < now()) {
            return redirect()->back()->withErrors(['error' => 'La date limite est passée.']);
        }

        $request->validate([
            'file' => 'required|mimes:pdf,doc,docx|max:2048',
        ]);

        $filePath = $request->file('file')->store('reports', 'public');

        Report::create([
            'user_id' => Auth::id(),
            'module_id' => $module->id,
            'file_path' => $filePath,
            'submitted_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Rapport téléchargé avec succès');
    }

    public function showSetDeadlinesForm()
    {
        $teacher = Auth::user();
        $modules = $teacher->modules;

        return view('profs.reports.set_deadlines', compact('modules'));
    }

    public function showReportsForTeacher()
    {
        $teacher = Auth::user();
        $modules = $teacher->modules->map(function ($module) {
            $module->total_reports = $module->reports->count();
            return $module;
        });

        return view('profs.reports.index', compact('modules'));
    }

    public function deleteReport(Report $report)
    {
        if (Storage::disk('public')->exists($report->file_path)) {
            Storage::disk('public')->delete($report->file_path);
        }

        $report->delete();

        return redirect()->back()->with('success', 'Rapport supprimé avec succès');
    }
    
    public function deleteAllReports(Module $module)
    {
        $module->reports()->delete();
        return redirect()->back()->with('success', 'Tous les rapports pour ce module ont été supprimés.');
    }

    public function downloadReport(Report $report)
    {
        if (Storage::disk('public')->exists($report->file_path)) {
            $filePath = Storage::disk('public')->path($report->file_path);
            return response()->streamDownload(function () use ($filePath) {
                readfile($filePath);
            }, basename($filePath));
        } else {
            return redirect()->back()->withErrors(['error' => 'Fichier non trouvé.']);
        }
    }
}
