<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    use HasFactory;

    protected $fillable = [
        'aluno_id',
        'curso_id',
        'user_id',
        'data_inscricao'
 ]; 

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function aluno_curso(){
        return $this->belongsTo(Aluno_Curso::class);
    }
}
