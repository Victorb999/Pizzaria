<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    //
    protected $fillable = [
        'telefone_cliente', 'nome_cliente', 'endereco','status'
    ];
}
