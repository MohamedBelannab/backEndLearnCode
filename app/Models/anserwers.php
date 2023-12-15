<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anserwers extends Model
{
    use HasFactory;
    protected $table = 'anserwers' ;
    public function anserwersquestions()
    {
        return $this->belongsTo(questions::class, 'idQuestion');
    }
}
