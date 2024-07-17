@extends('layouts.main')

@section('content')

<main>
    <div class="pb"></div>
    <section id="process">
        <div class="container">
            <div class="left">
                <div class="buying__cart">
                    @if($order->isSuccessful())
                    <div class="top success-buy">
                        <h3> <span><i class="fas fa-check"></i></span> Pedido realizado con éxito</h3>
                    </div>
                    <div class="confirmation__info">
                        <p>Se enviará la confirmación a tu email.</p>
                        <p><strong>Enviando a Nombre de la persona,</strong> Datos y direccion de envío.</p>
                        <p style="display: none;"><strong>Fecha aprox de entrega:</strong>Fecha de entrega estimada</p>
                    </div>
                    @else
                    <div class="top error-buy">
                        <h3></span> Error al realizar el pedido</h3>
                    </div>
                    @endif
                    <div class="bottom conf">
                        <a href="/" class="button__black">Continuar</a>
                    </div>
                </div>

            </div>
            <div class="right">
                @include('landing._total_carrito', ['order' => $order])
            </div>
        </div>
    </section>
</main>

@endsection