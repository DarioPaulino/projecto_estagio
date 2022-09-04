<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
            'nome',
            'data_inicio',
            'data_termino',
            'carga_horaria',
            'periodo',
            'preco',
            'user_id'
     ]; 
    public function alunos()
    {
        return $this->belongsToMany(Aluno::class);
    }
}
