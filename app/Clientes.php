<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $primaryKey = 'id_cliente';

    protected $fillable = [
        'nome','nascimento','email','cpf','telefone'
    ];
    protected $table = 'clientes';
}
