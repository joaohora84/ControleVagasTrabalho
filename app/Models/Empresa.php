<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Endereco;
use App\Models\Vaga;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = [
        'login',
        'senha',
        'razaoSocial',
        'cnpj',
        'areaAtuacao',
    ];

    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }

    public function vaga()
    {
        return $this->hasMany(Vaga::class);
    }
}
