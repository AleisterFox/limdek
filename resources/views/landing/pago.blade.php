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
                        <p class="customer__address">Dirección</p>
                        <p class="customer__colonia">Colonia</p>
                        <p class="customer__postal-code">Código postal</p>
                        <p class="customer__city--state">Estado, Municipio</p>
                        <a href="">Cambiar</a>
                    </div>
                </div>

                <div class="buying__cart">
                    <div class="top">
                        <h3>Selecciona método de pago</h3>
                    </div>

                    <div class="payment">
                        <p>En Mercado Pago no es necesario crear una cuenta.</p>
                        <form action="">
                            <div class="payment__method">
                                <div class="option">
                                    <input type="radio" name="payment" id="mercado" />
                                    <label for="mercado">Mercado Pago</label>
                                </div>
                                <div class="logos">
                                    <figure><img src="img/mercado.png" alt="" /></figure>
                                    <figure><img src="img/visa.png" alt="" /></figure>
                                    <figure><img src="img/master.png" alt="" /></figure>
                                    <figure><img src="img/amex.png" alt="" /></figure>
                                </div>
                            </div>
                            <div class="payment__method">
                                <div class="option">
                                    <input type="radio" name="payment" id="paypal" />
                                    <label for="paypal">Paypal</label>
                                </div>
                                <div class="logos">
                                    <figure><img src="img/paypal.png" alt=""></figure>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="bottom">
                        <a href="informacion.php" class="back"><i class="fas fa-chevron-left"></i>Volver a información</a>
                    </div>

                </div>

            </div>

            <div class="right">
                @include('landing._total_carrito')
                <a href="/confirmacion-pago" class="button__black">Comprar ahora</a>
            </div>
        </div>
    </section>

</main>
@endsection