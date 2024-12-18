<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory; 
    
    protected $table = "PEDIDO"; 
    protected $primaryKey = "PEDIDO_ID";
    public $timestamps = false;

    // Adicionar os campos que podem ser atribuídos em massa
    protected $fillable = [
        'USUARIO_ID',
        'STATUS_ID',
        'PEDIDO_DATA',
        'ENDERECO_ID'
    ];

    public function usuarioPedido()
    {
        return $this->belongsTo(User::class, 'USUARIO_ID', 'USUARIO_ID');
    }

    public function enderecoPedido()
    {
        return $this->belongsTo(Cadastro::class, 'ENDERECO_ID', 'ENDERECO_ID');
    }

    public function statusPedido()
    {
        return $this->belongsTo(StatusPedido::class, 'STATUS_ID', 'STATUS_ID');
    }
}
