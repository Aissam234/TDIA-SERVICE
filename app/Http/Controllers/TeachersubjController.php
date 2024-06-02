<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Module;
use App\Models\ArchivedCourse;
use App\Models\Filliere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TeachersubjController extends Controller
{
    public function manageSubject()
    {
        // Get the currently authenticated user
        $user = Auth::user();   

        $filieres = $user->filieres;

        $filieresArray = explode("- ", $filieres); 
        $TeacherTable = Module::where('teacher_id', $user->id)->pluck('Data', 'name');
       
        //Initialize an array to store modules for each filiere
        $modulesPerFiliere = [];

        // Loop through each filiere
        foreach ($filieresArray as $filiereId) {

            // Retrieve all modules associated with the current filiere id
            // Retrieve the data with both conditions

            $moduleNames = Module::where('teacher_id', $user->id)
                                    ->where('filliere_id', $filiereId)
                                    ->pluck('Data', 'name');


            $filiereName = Filliere::where('id', $filiereId)->pluck('name');

            // Store the modules in the array using the filiere name as the key
            $modules[$filiereName[0]] = $moduleNames;
        }      
        if (!$user) {
            // Redirect to login or handle the error
            return redirect()->route('login');
        }
        return view('profs.subjects-upload', compact('modules'));
    }
    public function uploadFile(Request $request)
    {
         // Validate the request to ensure a file was uploaded
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx|max: 500048',
            'moduleName' => 'required',
        ]);

        // Store the file in the storage/app/public directory
        $filePath = $request->file('file')->store('public');

        // Extract the file name from the path
        $fileName = basename($filePath);

        $moduleName = $request->input('moduleName');

        $module = Module::where('name', $moduleName)->first();
        // $ArchivedCourses = ArchivedCourse::where('name', $moduleName)->first();
        if ($module) {
            $module->Data = $fileName;
            $module->save();

            $archivedCourse = new ArchivedCourse();

            // Fill in the archived course details
            $archivedCourse->name = $moduleName;
            $archivedCourse->Data = $fileName;
            $archivedCourse->teacher_id = $module->teacher_id;
            $archivedCourse->filliere_id = $module->filliere_id;
    
            // Save the archived course
            $archivedCourse->save();
        }


        // Return a response, e.g., the path where the file is stored
        return back()->with('success', 'File uploaded successfully!')->with('file', $filePath);

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
    public function deleteFile($fileName)
    {
        // Delete the file from the storage
        if (Storage::exists('public/' . $fileName)) {
            Storage::delete('public/' . $fileName);
        }

        // Set the Data column to null and save the module
        $module = Module::where('Data', $fileName)->first();
        if ($module) {
            $module->Data = '';
            $module->save();
        }

        return back()->with('success', 'File deleted successfully!');
    }


    public function archivedCourses()
    {
        $user = Auth::user();

        $filieres = $user->filieres;

        $filieresArray = explode("- ", $filieres); 

        // Loop through each filiere
        foreach ($filieresArray as $filiereId) {

            $moduleNames = ArchivedCourse::where('teacher_id', $user->id)
                                            ->where('filliere_id', $filiereId)
                                            ->select('name', 'Data', 'is_archived', 'created_at')
                                            ->get();



            $filiereName = Filliere::where('id', $filiereId)->pluck('name');

            // Store the modules in the array using the filiere name as the key
            $modules[$filiereName[0]] = $moduleNames;
        }

    
        return view('profs.Archived-subjects', compact("modules"));
    }
    
    public function archiveFile($fileName)
    {
        // Fill in the archived course details
        $archivedCourse = ArchivedCourse::where('Data', $fileName)->first();
        if ($archivedCourse) {
            $archivedCourse->is_archived = true;
            $archivedCourse->save();
        }
        else{
            return back()->with('Error', 'Error while archiving the course!');
        }

        return back()->with('success', 'File archived successfully!');
    }

    public function unarchiveFile($fileName)
    {
        // Fill in the archived course details
        $archivedCourse = ArchivedCourse::where('Data', $fileName)->first();
        if ($archivedCourse) {
            $archivedCourse->is_archived = false;
            $archivedCourse->save();
        }
        else{
            return back()->with('Error', 'Error while Unarchiving the course!');
        }

        return back()->with('success', 'File unarchived successfully!');
    }

    

    
}
