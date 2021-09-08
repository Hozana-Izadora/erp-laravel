@extends('adminlte::page')

@section('content')
<div class="container-fluid">
    <div class="row mb-2">
        <br>
        <div class="col-sm-6">
            <h3>Listar Produtos</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Produtos</a></li>
                <li class="breadcrumb-item active">index</li>
            </ol>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Produtos
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Quantidade em Estoque</th>
                        <th>Ativo</th>
                        <th>Data do Cadastro</th>
                    </tr>
                    @foreach($produtos as $produto)
                    <tr>
                        <td>{{$produto->id_produto}}</td>
                        <td>{{$produto->nome}}</td>
                        <td>{{$produto->em_estoque }}</td>
                        <td>{{$produto->ativo?'Sim':'Não'}}</td>
                        <td>{{$produto->created_at}}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection