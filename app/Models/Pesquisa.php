<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesquisa extends Model
{
    use HasFactory;

    // Defina a tabela correspondente no banco de dados
    protected $table = 'PRODUTO'; // Certifique-se de usar o nome exato da tabela

    // Defina os campos que podem ser preenchidos
    protected $fillable = [
        'PRODUTO_ID',
        'PRODUTO_NOME',
        'PRODUTO_DESC',
        'PRODUTO_PRECO',
        'PRODUTO_DESCONTO',
        'CATEGORIA_ID',
        'PRODUTO_ATIVO',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'CATEGORIA_ID', 'CATEGORIA_ID');
    }

    // Define o relacionamento com a tabela de fotos
    public function fotos()
    {
        return $this->hasMany(Fotos::class, 'PRODUTO_ID', 'PRODUTO_ID');
    }
}

