@extends('layouts.main')

@section('content')

<main>

    <div class="pb"></div>
    <div class="topbar">
        <div class="steps">
            <div class="step">
                <a href="carrito.php">Carrito</a>
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="step">
                <a href="informacion.php">Información</a>
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="step active">
                <p>Envío</p>
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="step">
                <p>Pago</p>
            </div>
        </div>
    </div>

    <section id="process">

        <div class="container">
            <div class="left">
                <div class="buying__cart">
                    <div class="top">
                        <h3>Información</h3>
                    </div>
                    <div class="customer__info">
                        <p class="customer__name">
                            <strong>Nombre de la persona</strong>
                        </p>
                        <p class="customer__phone">Teléfono</p>
                        <p class="customer__email">Email</p>
                        <a href="">Cambiar</a>
                    </div>
                </div>

                <div class="buying__cart">
                    <div class="top">
                        <h3>Envío</h3>
                    </div>

                    <div class="customer__info">
                        <form action="">
                            <input type="number" name="postalCode" id="postalCode" placeholder="Código Postal*" required />
                            <a href="">No sé mi codigo postal</a>
                            <p>Complete su dirección de entrega</p>

                            <select name="state" id="state">
                                <option value="javascript:void(0);">Estado*</option>
                            </select>
                            <input type="text" name="city" id="city" placeholder="Municipio*" required />
                            <input type="text" name="address" id="address" placeholder="Dirección*" required />

                            <input type="text" name="colonia" id="colonia" placeholder="Colonia*" required />

                            <input type="number" name="exterior" id="exterior" placeholder="No. exterior*" required />

                            <input type="number" name="interior" id="interior" placeholder="No. interior" />

                            <input type="text" name="destinatario" id="destinatario" placeholder="Destinatario" />

                        </form>
                    </div>

                    <div class="bottom">
                        <a href="informacion.php" class="back"><i class="fas fa-chevron-left"></i>Volver a información</a>
                        <a href="pago.php" class="button">Continuar</a>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="cart__total">
                    <h2>Total del carrito</h2>

                    <div class="cart__products">
                        <div class="cart__products--product">
                            <figure><img src="img/estereo.png" alt=""></figure>
                            <div class="cart__product--description">
                                <h4>Microscopio Educativo</h4>
                                <p>Óptica Plan Acromática <br>
                                    Oculares 10x/20 Objetivos 4x, 10x, 40x y 100x oil <br>
                                    Iluminación fija Koehler y de tipo LED <br>
                                    Técnicas de iluminación: BF y DF</p>
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