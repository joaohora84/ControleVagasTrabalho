<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipo',
        'logradouro',
        'bairro',
        'uf',
        'cidade',
        'cep',
        'email',
        'telefoneResidencial',
        'telefoneComercial',
        'fax',
        'empresa_id',
        'candidato_id',
    ];

    public function empresa()
    {
      return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    public function candidato()
    {
        return $this->belongsTo(Candidato::class, 'candidato_id');
    }
}
