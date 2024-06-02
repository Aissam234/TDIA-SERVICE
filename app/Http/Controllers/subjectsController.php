<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Module;
use App\Models\ArchivedCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class subjectsController extends Controller
{
    public function filieres()
    {
        // Get the currently authenticated user
        $user = Auth::user();   
        $filiere = $user->filliere->name ?? 'No Filliere';
        
        $modules = $user->modules;
        if (!$user) {
            // Redirect to login or handle the error
            return redirect()->route('login');
        }


        return view('student.gestion-de-cours', compact('filiere', 'modules'));
    

    }
    public function download($fileName)
    {
        // Assuming the files are stored in the storage/app/public directory
        $filePath = storage_path("app/public/{$fileName}");

        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            abort(404, 'File not found');
        }
    }
    public function ArchiveCourses()
    {
        // Get the currently authenticated user
        $user = Auth::user();
        $filiere = $user->filliere->name ?? 'No Filliere'; 

        if (!$user) {
            // Redirect to login or handle the error
            return redirect()->route('login');
        }

        $modules = ArchivedCourse::where('filliere_id', $user->filliere_id)
                            ->select('name', 'Data', 'is_archived', 'created_at')
                            ->get();

        return view('student.Archive-Courses', compact("modules", 'filiere'));
    }

}
