<?php


namespace App\Models;

use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teacher extends AuthenticatableUser
{
    use HasFactory;
    protected $fillable = [
        'name', 'family_name' , 'email','filieres', 'password' , 'Image' 
    ];



    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    public function filieres()
    {
        return $this->belongsToMany(Filliere::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function isTeacher()
    {
        return true; 
    }

    public function ArchivedCourse()
    {
        return $this->hasMany(ArchivedCourse::class);
    }
}
