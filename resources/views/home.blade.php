@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> ERP Laravel</div>
                <div class="card-body">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif

                    Você foi logado com sucesso!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

