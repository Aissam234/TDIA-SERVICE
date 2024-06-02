<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Teacher;
use App\Models\Module;
use App\Models\Filliere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TeacherRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('Tregister');

     }

    public function registerPost(Request $request)
{
    // Define initial validation rules
    $rules = [
        'name' => 'required|regex:/^[a-zA-Z ]+$/u',
        'family_name' => 'required|regex:/^[a-zA-Z ]+$/u',
        'email' => 'required|email|unique:teachers,email',
        'password' => 'required|min:6|max:20|confirmed',
        'branches' => 'required|string',
        'img' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Correct max size in kilobytes
    ];

    $validator = Validator::make($request->all(), $rules);
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $branchesInput = $request->input('branches');
    $branches = array_map('trim', explode(',', $branchesInput));

    $allowedBranches = ['ID', 'TDIA', 'INFO', 'G2E', 'GEER', 'CIVIL', 'GM'];

    // Custom validation for each branch
    $invalidBranches = [];
    foreach ($branches as $branch) {
        if (!in_array($branch, $allowedBranches)) {
            $invalidBranches[] = $branch;
        }
    }

    // If there are invalid branches, redirect back with custom error
    if (!empty($invalidBranches)) {
        $validator->errors()->add('branches', 'Invalid branches: ' . implode(', ', $invalidBranches));
        return redirect()->back()->withErrors($validator)->withInput();
    }

    //Validate email
    $accEmail = $request->input("email");
    $email = array_map('trim', explode('@', $accEmail));

    if($email[1] !== 'uae.ac.ma')
    {
        $validator->errors()->add('email', 'Invalid Academique Email: ' . implode('@', $email));
        return redirect()->back()->withErrors($validator)->withInput();

    }



    // Fetch the IDs and names of the branches from the filieres table
    $filieres = Filliere::whereIn('name', $branches)->get(['id', 'name']);
    $arr = [];
    foreach ($filieres as $filiere) {
        $arr[] = $filiere->id;
    }
    // Concatenate all IDs in one string
    $Arr = implode('- ', $arr);

    // Image handling
    $image = $request->file('img');  // Ensure this is an instance of UploadedFile

    // Generate a new name for the file (e.g., based on the current timestamp and the original file extension)
    $imageName = time() . '.' . $image->getClientOriginalExtension();

    // Move the file to the public/images directory with the new name
    $image->move(public_path('images'), $imageName);

    $teacher = new Teacher();
    $teacher->name = $request->name;
    $teacher->family_name = $request->family_name;
    $teacher->email = $request->email;
    $teacher->password = Hash::make($request->password);
    $teacher->Image = 'images/' . $imageName;
    $teacher->filieres = $Arr;
    $teacher->save();


    // Return success response or redirect
    // return redirect()->back()->with('success', 'Registered successfully');

    $lastTeacher = Teacher::latest()->first();
    if ($lastTeacher) {
        $lastTeacherId = $lastTeacher->filieres;

        // Do something with the lastTeacherId
        return redirect()->route('T2register', ['feildID' => $lastTeacherId]);
    }

    return redirect()->back()->with('error', 'Something went wrong, Try again');

}

    public function ShowModules($feildID)
    {
        $filieresArray = explode("- ", $feildID); 

        foreach ($filieresArray as $filiereId) {

            // Retrieve all modules associated with the current filiere id
            // Retrieve the data with both conditions

            $moduleNames = Module::where('filliere_id', $filiereId)
                                    ->pluck('id', 'name');


            $filiereName = Filliere::where('id', $filiereId)->pluck('name');

            // Store the modules in the array using the filiere name as the key
            $modules[$filiereName[0]] = $moduleNames;
        }      
       
        return view('T2register', compact('modules'));
    }
    public function sendModules(Request $request)
    {
        $validated = $request->validate([
            'modules' => 'required|array',
            'modules.*' => 'exists:modules,id', // Assuming 'modules' is the name of your table
        ]);


        $selectedModules = $request->input('modules');

        $lastTeacher = Teacher::latest()->first();

        if ($lastTeacher) {
            $lastTeacherId = $lastTeacher->id;

            foreach($selectedModules as $moduleId)
            {
                $module = Module::find($moduleId);
                if ($module) {
                    $module->teacher_id = $lastTeacherId;
                    $module->save();
                }
            }
    
            // Do something with the lastTeacherId
            return redirect()->route('Tregister')->with('success', 'Modules assigned to the Teacher successfully.');
        }

        return redirect()->back()->with('Error', 'Error while connecting to Db');

    }

    
}
