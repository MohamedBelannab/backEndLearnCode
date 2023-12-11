<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class questions extends Model
{
    use HasFactory;
    
    protected $table = 'questions'; 

    protected $fillable = [
        'idQuiz',
        'bodyQuestion',
    ];

    public function Quizquestions()
    {
        return $this->belongsTo(Quiz::class, 'idQuiz');
    }
}
