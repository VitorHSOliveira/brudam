<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Cliente;
use App\Models\Cidade;

class Pedido extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    protected $fillable = [
        'id_cliente',
        'id_cidade',
        'data_entrega',
        'valor_frete',
    ];

    public function cliente() {
        return $this->belongsTo(Cliente::class, 'id_cliente', 'id');
    }

    public function cidade() {
        return $this->belongsTo(Cidade::class, 'id_cidade', 'id');
    }
    
}