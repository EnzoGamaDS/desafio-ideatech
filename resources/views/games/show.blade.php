@extends('games.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Visualizar Jogo</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('games.index') }}"> Voltar</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 mb-2 mt-3">
        <div class="form-group">
            <strong>Nome: </strong>
            {{ $game->name }}
        </div>
    </div>
    <div class="col-xs-12 mb-2 mt-3">
        <div class="form-group">
            <strong>Fabricante: </strong>
            {{ $game->manufacturer }}
        </div>
    </div>
    <div class="col-xs-12 mb-2 mt-3">
        <div class="form-group">
            <strong>Descrição: </strong>
            {{ $game->description }}
        </div>
    </div>
    <div class="col-xs-12 mb-2 mt-3">
        <div class="form-group">
            <strong>Data de lançamento: </strong>
            {{ date( 'd/m/Y' , strtotime( $game->launch ) ); }}
        </div>
    </div>
    <div class="col-xs-12 mb-2 mt-3">
        <div class="form-group">
            <strong>Imagem: </strong>
            <img class="border border-secondary rounded-circle" src="/image/{{ $game->image }}" width="500px">
        </div>
    </div>
</div>
@endsection