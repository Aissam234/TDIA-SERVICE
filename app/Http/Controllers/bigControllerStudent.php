<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class bigControllerStudent extends Controller
{
    public function profile(){
        $user = Auth::user(); 
        $filliere = $user->filliere->name ?? 'No Filliere';
        $evaluations = Evaluation::where('hidden', false)
            ->where('user_id', auth()->id())
            ->get();
        return view("student.profile" , compact('user','filliere','evaluations'));
    }
    public function abscence(){
        return view("student.abscence");
    }
    public function profs(){
        return view("student.ui-cards-hover");
    }
    public function video(){
        return view("student.video-player");
    }
    public function github(){
        return view("profs.github");
    }
    public function fetchUsersByFilliereAndTeacher(Request $request)
    {
        $filliereId = $request->input('filliere_id');
        $teacherId = $request->input('teacher_id');

        // Fetch users based on filliere and teacher
        $users = User::where('filliere_id', $filliereId)
                    ->where('teacher_id', $teacherId)
                    ->get();

        return response()->json($users);
    }
}
