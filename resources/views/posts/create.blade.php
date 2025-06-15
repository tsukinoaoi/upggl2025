@extends('layouts.app')

@section('titulo', 'Crear post')

@section('content')
<div class="py-5">
    <div class="text-center mb-4">
        <h1 class="display-5 fw-bold">Nuevo post</h1>
        <p class="lead text-muted">Aca podras crear un nuevo post.</p>
        <a href="{{ url('/posts') }}" class="btn btn-success">volver</a>

    </div>

</div>
@endsection

@section('autores')
<div class="text-center mt-4 text-muted small">
    <p>Creado por Ing. Luis Pineda</p>
</div>
@endsection
