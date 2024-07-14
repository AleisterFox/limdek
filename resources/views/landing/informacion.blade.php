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
                        <form>
                            <input type="text" name="contact" id="contact" placeholder="Número de teléfono movil" form="orderForm" required>
                        </form>
                    </div>
                </div>

                <div class="buying__cart">
                    <div class="top">
                        <h3>Entrega</h3>
                    </div>

                    <div class="customer__info">
                        <form id="orderForm" action="{{ route('order.store') }}" method="post">
                            @csrf
                            <input type="text" name="name" id="name" placeholder="Nombre" required>
                            <input type="text" name="last_name" id="last_name" placeholder="Apellido" required>
                            <input type="text" name="company" id="company" placeholder="Empresa (opcional)">
                            <input type="text" name="address" id="address" placeholder="Dirección" required>
                            <input type="text" name="house_type" id="house_type" placeholder="Casa, apartamento, etc. (opcional)">
                            <input type="number" name="zip" id="zip" placeholder="Código postal" required>
                            <input type="text" name="city" id="city" placeholder="Ciudad" required>
                            <select name="state" id="state">
                                <option value="javascript:void(0);">Estado</option>
                            </select>
                            <div class="store-data">
                                <input type="checkbox" name="agreement" id="agreement">
                                <label for="store-data">Permito guardar mis datos de forma segura para mis siguientes pedidos.</label>
                            </div>
                        </form>
                    </div>

                    <div class="bottom">
                        <a href="/carrito" class="back"><i class="fas fa-chevron-left"></i>Volver a carrito</a>
                        <button form="orderForm" type="submit" class="button__black">Continuar</button>
                    </div>
                </div>
            </div>


            <div class="right">
                @include('landing._total_carrito')
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