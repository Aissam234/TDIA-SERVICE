<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = ['teacher_id', 'filliere', 'data', 'file', 'deleted'];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
