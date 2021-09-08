<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PedidosCompras extends Model
{
    public function Produtos()
    {
        return $this->hasMany(Produtos::class, 'id_produto', 'produto_id');
    }
    public function Clientes()
    {
        return $this->hasMany(Clientes::class,'id_cliente','cliente_id');
    }
   
}
