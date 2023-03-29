@extends('games.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ideatech - Projeto de Games. by EnzoGamaDS.</h2>
        </div>
        <div class="pull-right my-4">
            <a class="btn btn-success" href="{{ route('games.create') }}"> Cadastrar novo jogo</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Imagem</th>
        <th>Name</th>
        <th>Descrição</th>
        <th width="280px">Ações</th>
    </tr>
    @foreach ($games as $game)
    <tr>
        <td>{{ $game->id }}</td>
        <td><img src="/image/{{ $game->image }}" width="100px"></td>
        <td>{{ $game->name }}</td>
        <td>{{ $game->description }}</td>
        <td>
            <form action="{{ route('games.destroy', $game->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('games.show', $game->id) }}">Visualizar</a>

                <a class="btn btn-primary" href="{{ route('games.edit', $game->id) }}">Editar</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $games->links() !!}
<br>
@endsection