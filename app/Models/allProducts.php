<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class allProducts extends Model
{
    use HasFactory; 
    protected $table = "PRODUTO"; 
    protected $primaryKey = "PRODUTO_ID";
}

