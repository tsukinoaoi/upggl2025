@extends('layouts.app')

@section('titulo', 'Bienvenido')

@section('content')
<div class="py-5">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Bienvenido a Nuestra Plataforma</h1>
        <p class="lead text-muted">
            Este es un espacio donde puedes <strong>crear</strong>, <strong>compartir</strong> y <strong>explorar</strong> publicaciones de todo tipo.
        </p>
    </div>

    <div class="row mt-5 text-center">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Publica Contenido</h5>
                    <p class="card-text text-muted">Crea posts fácilmente sobre los temas que te apasionan.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Explora Ideas</h5>
                    <p class="card-text text-muted">Lee publicaciones de otros usuarios y descubre nuevas perspectivas.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4 mt-md-0">
            <div class="card border-0 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Conecta con Otros</h5>
                    <p class="card-text text-muted">Participa, comenta y haz crecer tu red de ideas.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('autores')
<div class="text-center mt-5 text-muted small">
    <p>Creado por Ing. Luis Pineda</p>
</div>
@endsection
