<nav class="navbar navbar-light bg-light">
    <div class="container">
        @if(auth()->check())
            <p class="text-muted mb-0">Bienvenido, {{ auth()->user()->name }}!</p>
        @endif
        <a class="navbar-brand" href="{{ url('/') }}">Inicio</a>
        <a class="nav-link" href="{{ url('/posts') }}">Posts</a>
        @if(auth()->check())
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-danger">
                    <i class="bi bi-box-arrow-right"></i> Cerrar sesión
                </button>
            </form>
        @endif
    </div>
</nav>
