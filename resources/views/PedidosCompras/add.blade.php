@extends('adminlte::page')
@section('content')

<div class="container-fluid">
    <div class="row mb-2">
        <br>
        <div class="col-sm-6">
            <h3>Cadastrar Clientes</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Pedidos de Compras</a></li>
                <li class="breadcrumb-item active">Cadastrar</li>
            </ol>
        </div>
    </div>

    <div class="card card-secundary">
        <form action="{{url('PedidosCompra/store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Nome do Produto</label>
                    {{produtos}}
                    <!-- {!! Form::select('produto_id', $produtos, ['class' => 'form-control']) !!} -->
                </div>
                <div class="form-group">
                    <label>Quantidade em estoque</label>
                    <input type="number" class="form-control" name="em_estoque">
                </div>
                <div class="form-group">
                    <label>Ativo?</label>
                    <input type="checkbox" name="ativo">
                </div>
               

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
        </form>
    </div>
</div>

@endsection