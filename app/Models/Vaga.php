<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;

class Vaga extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo',
        'especificacoes',
        'remuneracao',
        'valeTransporte',
        'valeRefeicao',
        'observacoes',
        'turno',
        'formaContratacao',
        'uf',
        'empresa_id',
    ];

    public function empresa(){

        return $this->belongsTo(Empresa::class);
        
    }

}
