<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotos extends Model
{
    use HasFactory;
    protected $table = "PRODUTO_IMAGEM";
    protected $primaryKey = "IMAGEM_ID";

}