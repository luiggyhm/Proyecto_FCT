<article>
    <h1>Elige tu suscripción</h1>
    <form action="{{ route('pagarConStripe') }}" method="POST">
        @csrf
        <input class ="hidden" type="text" name="nombre" value="Acceso Mensual">
        <input class ="hidden" type="text" name="precio" value="5.99">
        <button type="submit" class="boton-neon">Acceso Mensual - €5,99</button>
    </form>

    <form action="{{ route('pagarConStripe') }}" method="POST">
        @csrf
        <input class ="hidden" type="text" name="nombre" value="Acceso Anual">
        <input class ="hidden" type="text" name="precio" value="49.99">
        <button type="submit" class="boton-neon">Acceso Anual - €49,99</button>
    </form>
    </article>
