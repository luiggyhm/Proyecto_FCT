@if (Route::has('login'))
    @auth
    <form action="{{ route('logout') }}" method="post" class="d-inline">
        @csrf
        @method('post')
        <button type="submit" class="btn btn-outline-dark">
            <i class="bi bi-person"></i> Logout
        </button>

        <a href="{{ route('usuario.edit', Auth::user()) }}" class="btn btn-outline-dark mx-1">
            <i class="bi bi-person"></i> Modificar Usuario
        </a>
    </form>
    @else
    <a href="{{ route('login') }}" class="btn btn-outline-dark mx-1">
        <i class="bi bi-person"></i> Login
    </a>
    <a href="{{ route('usuario.create') }}" class="btn btn-outline-dark mx-1">
        <i class="bi bi-person"></i> Registrate
    </a>
    @endauth
@endif