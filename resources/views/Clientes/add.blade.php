@extends('adminlte::page')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js" integrity="sha256-yE5LLp5HSQ/z+hJeCqkz9hdjNkk1jaiGG0tDCraumnA=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#telefone').mask('(00) 00000-0000')
    })
</script>
<div class="container-fluid">
    <div class="row mb-2">
        <br>
        <div class="col-sm-6">
            <h3>Cadastrar Clientes</h3>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Clientes</a></li>
                <li class="breadcrumb-item active">Cadastrar</li>
            </ol>
        </div>
    </div>

    <div class="card card-secundary">
        <form action="{{url('Clientes/store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Nome do Cliente</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Data de nascimento</label>
                    <input type="date" class="form-control" name="nascimento">
                </div>
                <div class="form-group">
                    <label>CPF</label>
                    <input type="text" class="form-control" name="cpf">
                </div>
                <div class="form-group">
                    <label>Telefone (Wpp)</label>
                    <input type="text" class="form-control" name="telefone" id="telefone">
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