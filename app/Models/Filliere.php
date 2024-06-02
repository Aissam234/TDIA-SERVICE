<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filliere extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class);
    }


    public function users()
    {
        return $this->hasMany(User::class);
    }
}