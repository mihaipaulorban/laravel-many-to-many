@extends('layouts.app')

@section('content')
<div class="container vh-100">
    <h1>Modifica Tipo</h1>
    <form action="{{ route('admin.types.update', $type->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nome Tipo:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $type->name }}" required>
        </div>
        <button type="submit" class="btn btn-success">Aggiorna</button>
        <a href="{{ route('admin.types.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
</div>
@endsection
