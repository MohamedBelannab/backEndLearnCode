<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\anserwers;

class questions extends Model
{
    use HasFactory;
    
    protected $table = 'questions'; 

    protected $fillable = [
        'idQuiz',
        'bodyQuestion',
    ];

    public function answers()
    {
        return $this->hasMany(anserwers::class , 'idQuestion');
    }
}
