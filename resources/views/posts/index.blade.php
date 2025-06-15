@extends('layouts.app')

@section('titulo', 'Lista de Posts')

@section('content')
<div class="py-5">
    <div class="text-center mb-4">
        <h1 class="display-5 fw-bold">Bienvenido al Blog</h1>
        <p class="lead text-muted">Explora todos los posts publicados por nuestra comunidad.</p>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="d-flex flex-wrap gap-3 mb-4">
                <a href="{{ url('/posts') }}" class="btn btn-primary">
                    Ver Posts
                </a>
                <a href="{{ url('/posts/create') }}" class="btn btn-success">
                    Crear Nuevo
                </a>
                <a href="{{ url('/posts/edit') }}" class="btn btn-warning text-white">
                    Editar Post
                </a>
                <a href="{{ url('/posts/1') }}" class="btn btn-info text-white">
                    Detalles del Post
                </a>
            </div>
      
                   <h2 class="h4 mb-4">Lista de todos los posts</h2>
            <p class="text-muted">Aquí se mostrará la lista de posts disponibles.</p>
        </div>
    </div>
</div>
@endsection

@section('autores')
<div class="text-center mt-4 text-muted small">
    <p>Creado por Ing. Luis Pineda</p>
</div>
@endsection
