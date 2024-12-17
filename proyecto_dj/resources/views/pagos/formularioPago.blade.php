@if (Route::has('login'))
@auth
<article>
    <h1>Elige tu suscripción</h1>
    <form action="{{ route('pagarConStripe') }}" method="POST">
        @csrf
        <input class="hidden" type="text" name="nombre" value="Acceso Mensual">
        <input class="hidden" type="text" name="precio" value="5.99">
        <button type="submit" class="boton-neon">Acceso Mensual - €5,99</button>
    </form>

    <form action="{{ route('pagarConStripe') }}" method="POST">
        @csrf
        <input class="hidden" type="text" name="nombre" value="Acceso Anual">
        <input class="hidden" type="text" name="precio" value="49.99">
        <button type="submit" class="boton-neon">Acceso Anual - €49,99</button>
    </form>
</article>
</form>
@else
<article>
<h1>Inicia sesion o registrate para ver los tipos de suscripciones</h1>
<a href="{{ route('login') }}" class="boton-neon">
    <i class="bi bi-person"></i> Login
</a>
<a href="{{ route('registrarse') }}" class="boton-neon">
    <i class="bi bi-person"></i> Registrate
</a>
</article>
@endauth
@endif
</a>