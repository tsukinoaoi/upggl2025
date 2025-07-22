@extends('layouts.app')

@section('titulo', 'Crear cuenta')

@section('content')
<div class="py-5">
    <div class="text-center mb-4">
        <h1 class="display-5 fw-bold">Crear cuenta</h1>
        <p class="lead text-muted">Regístrate para comenzar a usar la aplicación.</p>
        <a href="{{ route('login') }}" class="btn btn-secondary">Ya tengo cuenta</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <form method="POST" action="{{ route('register.submit') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre completo</label>
                    <input 
                        id="name" 
                        type="text" 
                        name="name" 
                        class="form-control @error('name') is-invalid @enderror" 
                        value="{{ old('name') }}" 
                        required 
                        autofocus
                    >
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input 
                        id="email" 
                        type="email" 
                        name="email" 
                        class="form-control @error('email') is-invalid @enderror" 
                        value="{{ old('email') }}" 
                        required
                    >
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input 
                        id="password" 
                        type="password" 
                        name="password" 
                        class="form-control @error('password') is-invalid @enderror" 
                        required
                    >
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar contraseña</label>
                    <input 
                        id="password_confirmation" 
                        type="password" 
                        name="password_confirmation" 
                        class="form-control" 
                        required
                    >
                </div>

                <button type="submit" class="btn btn-success w-100">Registrarse</button>
            </form>

        </div>
    </div>
</div>
@endsection

@section('autores')
<div class="text-center mt-4 text-muted small">
    <p>Creado por Ing. Luis Pineda</p>
</div>
@endsection
