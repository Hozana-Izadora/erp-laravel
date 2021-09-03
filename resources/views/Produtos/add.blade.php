@extends('adminlte::page')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Add `Produtos
            </div>
            <div class="card-body">
                <form action="{{route('Produtos/produtos.store')" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>                

                </form>
            </div>
        </div>
    </div>
</div>
@endsection