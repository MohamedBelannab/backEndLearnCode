<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function QuizLanguage()
    {
        return $this->belongsTo(Language::class, 'idLangage');
    }

    public function userResults()
    {
        return $this->hasMany(userresults::class, 'idQuiz');
    }

}
