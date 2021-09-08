<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class PedidosCompras extends Model
{
    protected $primaryKey = 'id_pedido_compra';

    protected $fillable = [
        'produto_id','qtd_pedido','cliente_id','status','nr_pedido'
    ];
    protected $table = 'pedidos_compras';

    public function produtos()
    {
       return $this->hasMany(Produtos::class, 'id_produto','produto_id');
       
    }
   
    public function clientes()
    {
        return $this->hasMany(Clientes::class,'id_cliente','cliente_id');
    }
   
}
