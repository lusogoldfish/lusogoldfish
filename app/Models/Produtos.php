<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'descricao', 'preco', 'tipo', 'cor', 'tamanho', 'categoria_acessorio', 'imagem',
    ];
}
