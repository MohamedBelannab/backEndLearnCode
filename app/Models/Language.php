<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    protected $table = 'langages' ;
    protected $guarded = [];

    public function quiz()
    {
        return $this->hasOne(Quiz::class , 'idLangage');
    }
}
