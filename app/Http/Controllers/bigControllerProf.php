<?php

namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Filliere; 
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Imports\StudentsImport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StudentRequest;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Validators\ValidationException;


class bigControllerProf extends Controller
{
    public function profile(){
        $teacher = Auth::user();
        $notifications = Notification::where('teacher_id', auth()->id())->where('deleted', false)->get();

    // Retrieve the fillieres associated with the teacher
        $filliereIds = explode('-', $teacher->filieres);

        // Retrieve the filliere names based on the filliere IDs
        $fillieres = Filliere::whereIn('id', $filliereIds)->get();

    // Pass the fillieres to the view
        return view('profs.profile', compact('teacher','notifications','fillieres'));
    }
    public function abscence(){
        return view("profs.abscence");
    }
    public function calendrie(){
        return view("profs.calendar");
    }
    public function students(){
        return view("profs.infoStudent");
    }
    public function profs(){
        return view("profs.infoProf");
    }
    public function video(){
        return view("profs.video-player");
    }
    public function github(){
        return view("profs.github");
    }




    //partie malak 



    public function AfficherListeEtudiant(){
        $users = User::with('filliere')->paginate(6); // Charge la relation 'filiere' avec les utilisateurs
        return view('profs.infoStudent', compact('users')); // Passe la variable $users à la vue}
    }

    public function create(){
        return view("profs.form-add-student");
    }

    public function storeStudent(StudentRequest $request)
    {
        // Validation des données
        $validatedData = $request->validated();
    
        // Vérifier si l'email existe déjà
        $existingUser = User::where('email', $validatedData['email'])->first();
        if ($existingUser) {
            return redirect()->back()->withErrors(['email' => 'L\'adresse email est déjà utilisée.']);
        }
    
        // Rechercher l'ID de la filière
        $filiere = Filliere::where('name', $request->input('filiere'))->first();
        if (!$filiere) {
            return redirect()->back()->withErrors(['filiere' => 'La filière spécifiée n\'existe pas.']);
        }
    
        // Ajouter l'ID de la filière aux données validées
        $validatedData['filliere_id'] = $filiere->id;
    
        // Ajouter l'image
        $validatedData['image'] = $request->file('image')->store('User', 'public');
    
        // Cryptage du mot de passe
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        // Insertion dans la base de données
        User::create($validatedData);
    
        // Redirection avec un message de succès
        return redirect()->route("listeEtudiant")->with("success", $request->name . " has been created successfully");
    }

    public function destroy(User $user){
        $user->delete();
        return redirect()->route('listeEtudiant')->with('success',  $user->nom . " has been deleted successfully");
    }

    public function editStudent(Request $request){
        $id = $request->query('id');
        $user = User::findOrFail($id);
        return view('profs.editEtudiant', compact('user'));
    }

    public function update(Request $request, User $user)
{
    // Validation des données
    $validatedData = $request->validate([
        'name' => 'nullable|string|max:255',
        'family_name' => 'nullable|string|max:255',
        'email' => 'nullable|string|email|max:255|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:8|confirmed',
        'filiere' => 'nullable|string',
        'image' => 'nullable|image'
    ]);

    // Rechercher l'ID de la filière en fonction du nom de la filière entré, s'il est fourni
    if (!empty($validatedData['filiere'])) {
        $filiere = Filliere::where('name', $request->input('filiere'))->first();

        if (!$filiere) {
            return redirect()->back()->withErrors(['filiere' => 'La filière spécifiée n\'existe pas.']);
        }

        // Ajouter l'ID de la filière aux données validées
        $validatedData['filliere_id'] = $filiere->id;
    }

    // Cryptage du mot de passe si nécessaire
    if (!empty($validatedData['password'])) {
        $validatedData['password'] = Hash::make($validatedData['password']);
    } else {
        unset($validatedData['password']);
    }

    // Gestion de l'image
    if ($request->hasFile('image')) {
        $validatedData['image'] = $request->file('image')->store('User', 'public');
    }

    // Mise à jour des informations de l'étudiant
    $user->update(array_filter($validatedData)); // Utilisation de array_filter pour éviter les valeurs nulles

    // Redirection avec un message de succès
    return redirect()->route('listeEtudiant')->with('success', 'the informations of student has been updated successfully.');
}


// importation de fichier excel 
public function import()
{
    return view('profs.import-students');
}

public function importStudents(Request $request)
{
    $request->validate([
        'file' => 'required|mimes:xlsx,xls',
    ]);

    try {
        Excel::import(new StudentsImport, $request->file('file')->store('temp'));
        return redirect()->route('listeEtudiant')->with('success', 'Students imported successfully. Check the generated passwords in the passwords.txt file.');
    } catch (ValidationException $e) {
        $failures = $e->failures();

        $errorMessages = [];
        foreach ($failures as $failure) {
            $errorMessages[] = 'Row ' . $failure->row() . ': ' . implode(', ', $failure->errors());
        }

        return redirect()->back()->withErrors($errorMessages);
    }
}
    }


    

