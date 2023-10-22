<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreatePedido extends Model
{
    use HasFactory;
    
    protected $table = 'pedidos';

    protected $fillable = [
        'id_cliente',
        'id_cidade',
        'data_entrega',
        'valor_frete',
    ];

}