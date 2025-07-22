@extends('layouts.app')

@section('titulo', 'Iniciar sesión')

@section('content')
<div class="py-5">
    <div class="text-center mb-4">
        <h1 class="display-5 fw-bold">Iniciar sesión</h1>
        <p class="lead text-muted">Ingresa tus credenciales para acceder.</p>
        <a href="{{ route('register') }}" class="btn btn-primary">Crear cuenta</a>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">

            <form method="POST" action="{{ route('login.attempt') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input id="email" type="email"  name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required  autofocus>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input  id="password" type="password" name="password" class="form-control @error('password') is-invalid @enderror" required >
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success w-100">Iniciar sesión</button>
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
