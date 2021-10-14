<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresa';

    protected $fillable = [
        'login',
        'senha',
        'razaoSocial',
        'cnpj',
        'areaAtuacao',
    ];

    public function endereco()
    {
        return $this->hasOne(Endereco::class, 'empresa_id');
    }

    public function vaga()
    {
        return $this->hasMany(Vaga::class, 'empresa_id');
    }
}
