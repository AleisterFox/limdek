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
                @include('landing._total_carrito')
            </div>
        </div>
    </section>

</main>

@endsection