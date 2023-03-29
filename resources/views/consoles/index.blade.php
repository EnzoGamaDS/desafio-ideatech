@extends('consoles.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Listagem de consoles</h2>
        </div>
        <div class="pull-right my-4">
            <a class="btn btn-success" href="{{ route('consoles.create') }}"> Cadastrar novo console</a>
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
        <th>Name</th>
        <th>Descrição</th>
        <th width="280px">Ações</th>
    </tr>
    @foreach ($consoles as $console)
    <tr>
        <td>{{ $console->id }}</td>
        <td>{{ $console->name }}</td>
        <td>{{ $console->description }}</td>
        <td>
            <form action="{{ route('consoles.destroy', $console->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('consoles.show', $console->id) }}">Visualizar</a>

                <a class="btn btn-primary" href="{{ route('consoles.edit', $console->id) }}">Editar</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Deletar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $consoles->links() !!}
<br>
@endsection