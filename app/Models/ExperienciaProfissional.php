<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienciaProfissional extends Model
{
    use HasFactory;

    protected $table = 'experiencia_profissional';

    protected $fillable = [
        'empresa',
        'cargo',
        'formaContratacao',
        'dataInicio',
        'dataConclusao',
        'candidato_id',
    ];

    public function candidato(){
        return $this->belongsTo(Candidato::class, 'candidato_id');
    }
}
