<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\questions;

class Quiz extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function question() 
    {
        return $this->hasMany(questions::class  , 'idQuiz');

    }

    public function userResults()
    {
        return $this->hasMany(userresults::class, 'idQuiz');
    }

}
