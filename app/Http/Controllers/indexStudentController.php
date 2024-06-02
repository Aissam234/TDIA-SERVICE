<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Evaluation;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class indexStudentController extends Controller
{
    public function indexStudent()
{
    
    $evaluationsCount = Evaluation::where('hidden', false)->count();
    $notificationCount = Notification::where('deleted', false)->count();
    $user = Auth::user(); 

    if (!$user) {
        return redirect()->route('login');
    }
    $evaluations = Evaluation::where('hidden', false)
            ->where('user_id', $user->id)
            ->get();
        $evaluationsCount = Evaluation::where('hidden', false)
            ->where('user_id', $user->id)
            ->count();


    $filliere = $user->filliere->name ?? 'No Filliere';


    $userCount = User::count(); 


    return view("student.index", compact('filliere', 'userCount', 'user','notificationCount','evaluationsCount','evaluations'));
}
}
