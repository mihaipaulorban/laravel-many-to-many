@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Aggiungi un Nuovo Tipo</h1>
    <form action="{{ route('admin.types.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome Tipo:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-success">Crea</button>
        <a href="{{ route('admin.types.index') }}" class="btn btn-secondary">Annulla</a>
    </form>
</div>
@endsection
