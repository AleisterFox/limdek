@extends('layouts.main')

@section('content')

<main>
    <div class="pb"></div>
    <section id="process">

        <div class="container">
            <div class="left">
                <div class="buying__cart">
                    <div class="top success-buy">
                        <h3> <span><i class="fas fa-check"></i></span> Pedido realizado con éxito</h3>
                    </div>
                    <div class="confirmation__info">
                        <p>Se enviará la confirmación a tu email.</p>
                        <p><strong>Enviando a Nombre de la persona,</strong> Datos y direccion de envío.</p>
                        <p><strong>Fecha aprox de entrega:</strong>Fecha de entrega estimada</p>
                    </div>
                    <div class="bottom conf">
                        <a href="index.php#products" class="button__black">Continuar</a>
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