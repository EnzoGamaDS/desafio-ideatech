@extends('consoles.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Visualizar informações de console</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('consoles.index') }}"> Voltar</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-lg-12 pb-4 pt-5">
        <div class="form-group">
            <strong>Nome: </strong>
            {{ $console->name }}
        </div>
    </div>
    <div class="col-xs-12 col-lg-12  pb-4 pt-5">
        <div class="form-group">
            <strong>Descrição: </strong>
            {{ $console->description }}
        </div>
    </div>
    <!-- esse campo é de exemplo, pois no teste cita ele, mas não especifica -->
    <div class="col-xs-12 col-md-12  pb-4 pt-5">
        <div class="form-group">
            <strong>Faturamento: </strong>
            {{ rand(1000, 99999999999999999) }}
        </div>
    </div>
</div>
@endsection