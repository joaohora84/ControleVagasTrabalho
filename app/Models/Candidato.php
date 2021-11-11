<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Endereco;
use App\Models\ExperienciaProfissional;


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
        return $this->hasOne(Endereco::class);
    }

    public function experienciaProfissional()
    {
        return $this->hasMany(ExperienciaProfissional::class);
    }
}
