<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno_Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'curso_id'
    ];
    
    public function inscricoes(){

        return $this->hasMany(Inscricao::class);
        
     }
}
