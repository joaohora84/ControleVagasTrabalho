<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;

    protected $fillable = [
        'login',
        'senha',
        'nome',
        'rg',
        'orgaExpeditor',
        'dataExpedicao',
        'cpf',
        'dataNascimento',
        'sexo',
        'estadoCivil',
    ];

    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'candidato_id');
    }

    public function experienciaProfissional()
    {
        return $this->hasMany(ExperienciaProficional::class, 'candidato_id');
    }
}
