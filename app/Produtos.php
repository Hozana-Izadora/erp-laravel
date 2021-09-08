<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $primaryKey = 'id_produto';

    protected $fillable = [
        'nome','em_estoque','ativo'
    ];
    protected $table = 'produtos';

    
}
