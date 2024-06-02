<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
        'evaluation', 'rating', 'difficulties', 'problems', 'hidden'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function filliere()
    {
        return $this->user->filliere();
    }
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
