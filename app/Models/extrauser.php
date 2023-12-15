<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class extrauser extends Model
{
    use HasFactory;
    protected $table = 'extrauser' ;
    protected $fillable = [
        'idUser', 'Education', 'WorkExperience', 'bio', 'MySocials'
    ];

    
    public function extrauser()
    {
        return $this->belongsTo(User::class, 'idUser');
    }
}
