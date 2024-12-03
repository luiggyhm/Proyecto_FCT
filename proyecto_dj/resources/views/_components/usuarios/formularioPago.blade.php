<form action="{{route('')}}" method="post" style="width: 3000px;">
    @csrf
    <div class="container px-4 px-lg-5 bg-dark rounded p-4 mt-5" style="width: 30%;">
        <!-- Contenido del contenedor... -->
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label text-white">Elige método de pago:</label>
            <br>

            <label for="tarjeta" id="label_tarjeta" class="form-label text-white">Tarjeta:</label>
            <input type="radio" id="tarjeta" name="metodopago" value="tarjeta" onclick="mostrarTarjeta()">


            <label for="paypal" id="label_paypal" class="form-label text-white">Paypal:</label>
            <input type="radio" id="paypal" name="metodopago" value="paypal" onclick="mostrarPaypal()">
        </div>
        <div class="mb-3" id="contenedor_tarjeta" style="display: none;">
            <label for="num_tarjeta" class="form-label text-white">Introduce el número de tarjeta:</label>
            <input type="text" class="form-control w-100" id="numtarjeta" name="numtarjeta"  placeholder="Número de tarjeta" >
            <label for="num_tarjeta" class="form-label text-white">C.V.C:</label>
            <input type="text" class="form-control w-100" name="cvv" placeholder="Número CVC" >
            <label for="num_tarjeta" class="form-label text-white">Fecha de caducidad:</label>
            <input type="month" class="form-control w-100" name="caducidad" placeholder="Fecha de caducidad de la tarjeta">
        </div>

        <div class="mb-3" id="contenedor_paypal" style="display: none;">
            <label for="correo_paypal" class="form-label text-white">Introduce el correo de la cuenta de Paypal:</label>
            <input type="email" class="form-control w-100" id="correo_paypal" name="correopaypal" placeholder="Correo de Paypal">
        </div>

        <button type="submit" class="btn btn-light">Pagar</button>
    </div>
</form>

<script>
    function mostrarTarjeta() {
        document.getElementById("contenedor_tarjeta").style.display = "block";
        document.getElementById("contenedor_paypal").style.display = "none";
    }

    function mostrarPaypal() {
        document.getElementById("contenedor_tarjeta").style.display = "none";
        document.getElementById("contenedor_paypal").style.display = "block";
    }
</script>
