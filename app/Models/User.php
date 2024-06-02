<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

class User extends AuthenticatableUser
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'name','family_name', 'email', 'password' , 'image', 'filliere_id' 
    ];

    public function filliere()
    {
        return $this->belongsTo(Filliere::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    public function modules()
    {
        return $this->hasMany(Module::class, 'filliere_id', 'filliere_id');
    }

    public function notifications()
    {
        return $this->belongsToMany(Notification::class, 'user_notifications', 'user_id', 'notification_id');
    }
    public function evaluations()
    {
        return $this->hasMany(Evaluation::class);
    }

    //malak
    public function reports()
    {
        return $this->hasMany(Report::class);
    }

}
