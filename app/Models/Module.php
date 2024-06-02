<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'filliere_id', 'teacher_id', 'deadline'];
    // Utilisation de casts pour convertir automatiquement en instance de Carbon
    protected $casts = [
        'deadline' => 'datetime',
    ];
    public function filliere()
    {
        return $this->belongsTo(Filliere::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
    /**
     * Get the user that owns the filiere.
     */
    public function users()
    {
        return $this->belongsTo(User::class, 'filliere_id', 'filliere_id');
    }
    public function teachers()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
