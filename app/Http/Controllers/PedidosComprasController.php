<?php

namespace App\Http\Controllers;

use App\PedidosCompras;
use App\Produtos;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PedidosComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produtos = Produtos::All();
        return view('PedidosCompras/add', compact('produtos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PedidosCompras  $pedidosCompras
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedidoCompras = DB::table('pedidos_compras')->where('nr_pedido', $id)->get();
        // $pedidoCompras = PedidosCompras::All()->where('nr_pedido', $id)->with('produtos');
        // $produtos = $pedidoCompras->with('produtos')->where('nr_pedido', $id);
        // foreach($produtos as $produto){
        //     echo $produto->
        // }
        return $pedidoCompras;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PedidosCompras  $pedidosCompras
     * @return \Illuminate\Http\Response
     */
    public function edit(PedidosCompras $pedidosCompras)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PedidosCompras  $pedidosCompras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PedidosCompras $pedidosCompras)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PedidosCompras  $pedidosCompras
     * @return \Illuminate\Http\Response
     */
    public function destroy(PedidosCompras $pedidosCompras)
    {
        //
    }
}
