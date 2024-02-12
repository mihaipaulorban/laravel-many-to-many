@extends('layouts.app')

@section('content')
<div class="container vh-100">
    <h1>Gestione Tipi</h1>
    <a href="{{ route('admin.types.create') }}" class="btn btn-primary">Aggiungi Tipo</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
            <tr>
                <td>{{ $type->id }}</td>
                <td>{{ $type->name }}</td>
                <td>
                    <a href="{{ route('admin.types.edit', $type->id) }}" class="btn btn-warning">Modifica</a>
                    <form action="{{ route('admin.types.destroy', $type->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Sei sicuro di voler eliminare questo tipo?')">Elimina</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection