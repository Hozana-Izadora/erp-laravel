<?php

namespace App\Http\Controllers;

use App\PedidosCompras;
use Illuminate\Http\Request;

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
        //
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
        $pedidosCompras = PedidosCompras::where('id_pedido_compra',$id)->first();

        $produtos = $pedidosCompras->Produtos();
return $produtos;
      
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
