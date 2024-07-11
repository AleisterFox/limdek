@extends('layouts.main')


@section('content')
<main>

    <div class="pb"></div>
    <div class="topbar">
        <div class="steps">
            <div class="step">
                <a href="/carrito">Carrito</a>
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="step active">
                <p>Información</p>
                <i class="fas fa-chevron-right"></i>
            </div>
            <!-- <div class="step">
      <p>Envío</p>
      <i class="fas fa-chevron-right"></i>
    </div>
    <div class="step">
      <p>Pago</p>
    </div> -->
        </div>
    </div>

    <section id="process">

        <div class="container">
            <div class="left">

                <div class="buying__cart">
                    <div class="top">
                        <h3>Contacto</h3>
                    </div>

                    <div class="customer__info">
                        <form action="">
                            <input type="text" name="contact" id="contact" placeholder="Email o número de teléfono movil" required>
                        </form>
                    </div>
                </div>

                <div class="buying__cart">
                    <div class="top">
                        <h3>Entrega</h3>
                    </div>

                    <div class="customer__info">
                        <form action="">
                            <select name="" id="">
                                <option value="">País / Región</option>
                                <option value="">opcion1</option>
                                <option value="">opcion2</option>
                                <option value="">opcion3</option>
                                <option value="">opcion4</option>
                                <option value="">opcion5</option>
                            </select>
                            <input type="text" name="name" id="name" placeholder="Nombre" required>
                            <input type="text" name="lastname" id="lastname" placeholder="Apellido" required>
                            <input type="text" name="empresa" id="empresa" placeholder="Empresa (opcional)">
                            <input type="text" name="address" id="address" placeholder="Dirección" required>
                            <input type="text" name="type" id="type" placeholder="Casa, apartamento, etc. (opcional)">
                            <input type="number" name="postal" id="postal" placeholder="Código postal" required>
                            <input type="text" name="city" id="city" placeholder="Ciudad" required>
                            <select name="state" id="state">
                                <option value="javascript:void(0);">Estado</option>
                            </select>
                            <div class="store-data">
                                <input type="checkbox" name="store-data" id="store-data">
                                <label for="store-data">Permito guardar mis datos de forma segura para mis siguientes pedidos.</label>
                            </div>
                        </form>
                    </div>

                    <div class="bottom">
                        <a href="/carrito" class="back"><i class="fas fa-chevron-left"></i>Volver a carrito</a>
                        <a href="/pago" class="button__black">Continuar</a>
                    </div>
                </div>
            </div>


            <div class="right">
                <div class="cart__total">
                    <h2>Total del carrito</h2>

                    <div class="cart__products">
                        <div class="cart__products--product">
                            <figure><img src="img/lambrin-interior.png" alt=""></figure>
                            <div class="cart__product--description">
                                <h4>Lambrin WPC Interior Color Avellana Fondo Negro</h4>
                            </div>
                            <p>$0.00 MXN</p>
                        </div>
                    </div>

                    <div class="subtotal">
                        <p>Subtotal</p>
                        <p class="subtotal__amount">$ 0.00 MXN</p>
                    </div>
                    <div class="gastos__envio">
                        <p>Calculando gastos de envío</p>
                        <p class="subtotal__amount">$ 0.00 MXN</p>
                    </div>
                    <div class="total">
                        <h3>Total</h3>
                        <p class="total__amount">$ 0.00 MXN</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>
@endsection

@push('scripts')
<script>
    const estadosMexicanos = [
        "Aguascalientes",
        "Baja California",
        "Baja California Sur",
        "Campeche",
        "Chiapas",
        "Chihuahua",
        "Coahuila",
        "Colima",
        "Ciudad de México",
        "Durango",
        "Guanajuato",
        "Guerrero",
        "Hidalgo",
        "Jalisco",
        "Estado de México",
        "Michoacán",
        "Morelos",
        "Nayarit",
        "Nuevo León",
        "Oaxaca",
        "Puebla",
        "Querétaro",
        "Quintana Roo",
        "San Luis Potosí",
        "Sinaloa",
        "Sonora",
        "Tabasco",
        "Tamaulipas",
        "Tlaxcala",
        "Veracruz",
        "Yucatán",
        "Zacatecas",
    ];

    const select = document.getElementById("state");

    estadosMexicanos.forEach((estadoMexicano, index) => {
        const option = document.createElement("option");
        option.text = estadoMexicano;
        option.value = index + 1;
        select.add(option);
    });
</script>
@endpush