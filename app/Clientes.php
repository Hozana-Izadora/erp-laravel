<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [
        'nome','nascimento','email','cpf','telefone'
    ];
    protected $table = 'clientes';
}
