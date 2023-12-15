<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userresults extends Model
{
    use HasFactory;

    protected $fillable = ['idUser', 'idQuiz', 'score'];
    protected $table = 'userresults' ;

    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }

    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'idQuiz');
    }
}
