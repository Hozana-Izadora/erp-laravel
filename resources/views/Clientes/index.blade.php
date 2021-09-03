@extends('adminlte::page')

@section('content')
<div class="container-fluid">
        <div class="row mb-2">
            <br>
          <div class="col-sm-6">
            <h3>Listar Clientes</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Clientes</a></li>
              <li class="breadcrumb-item active">index</li>
            </ol>
          </div>
        </div>
      </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Clientes
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>CPF</th>
                            <th>Created</th>
                            <th>Modified</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection