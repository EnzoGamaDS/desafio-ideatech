@extends('consoles.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Cadastre um novo console</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('consoles.index') }}"> Voltar</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Ops!</strong> Ocorreram alguns problemas com seu input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('consoles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-md-12 mt-4">
            <div class="form-group">
                <strong>Nome:</strong>
                <input type="text" name="name" class="form-control" placeholder="Nome">
            </div>
        </div>
        <div class="col-xs-12 col-md-12 mt-4">
            <div class="form-group">
                <strong>Descrição:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Descrição"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-md-12 mt-4">
            <div class="form-group">
                <strong>Fabricante:</strong>
                <input type="text" name="manufacturer" class="form-control" placeholder="Fabricante">
            </div>
        </div>

        <div class="col-md-12 text-center my-5">
            <button type="submit" class="btn btn-primary col-md-2"> Cadastrar </button>
        </div>
    </div>

</form>
@endsection