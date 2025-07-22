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
      
            <div class="container">
     <form method="GET" action="{{ url('/posts') }}">
    <div class="mb-3">
        <label for="estado" class="form-label">Filtrar por estado</label>
        <select 
            id="estado" 
            name="estado" 
            class="form-select"
        >
            <option value="">-- Selecciona estado --</option>
            <option value="publicado" {{ request('estado') == 'publicado' ? 'selected' : '' }}>Publicado</option>
            <option value="inactivo" {{ request('estado') == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
            <option value="borrado" {{ request('estado') == 'borrado' ? 'selected' : '' }}>Borrado</option>
        </select>
    </div>
          <div class="mb-3">
            <input 
                type="text" 
                name="keyword" 
                class="form-control" 
                placeholder="Buscar por título o contenido"
                value="{{ request('keyword') }}"
            >
        </div>


      <div class="mb-3">
            <button type="submit" class="btn btn-primary">Filtrar</button>
            <a href="{{ url('/posts') }}" class="btn btn-secondary">Restablecer</a>
        </div>

 </div>

       
    <div class="container">
            <h2 class="h4 mb-4">Lista de todos los posts</h2>
            <p class="text-muted">Aquí se mostrará la lista de posts disponibles.</p>
            
            @if ($posts->isEmpty())
                <p class="text-center text-muted">No hay posts disponibles.</p>
            @else
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Estado</th>
                            <th>Fecha de Publicación</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->titulo }}</td>
                                <td>{{ ucfirst($post->estado) }}</td>
                                <td>{{ $post->fecha_publicacion ? $post->fecha_publicacion->format('d/m/Y') : 'Sin fecha' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>

@endsection

@section('autores')
<div class="text-center mt-4 text-muted small">
    <p>Creado por Ing. Luis Pineda</p>
</div>
@endsection
