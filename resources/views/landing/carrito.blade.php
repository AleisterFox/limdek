@extends('layouts.main')

@section('content')
@use('App\Services\CartService')
<main>

    <div class="pb"></div>
    <div class="topbar">
        <div class="steps">
            <div class="step active">
                <p>Carrito</p>
                <i class="fas fa-chevron-right"></i>
            </div>
            <!-- <div class="step">
      <p>Información</p>
      <i class="fas fa-chevron-right"></i>
    </div>
    <div class="step">
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
                        <h3>Tu carrito de compra</h3>
                        <p class="number__articles">1 Artículo</p>
                    </div>

                    <div class="product">
                        <figure><img src="img/lambrin-interior.png" alt="" /></figure>
                        <div class="product__information">
                            <h3 class="product__name">Lambrin WPC Interior Color Avellana Fondo Negro</h3>
                            <div class="product__information--container">

                                <div class="input-group">
                                    <input type="number" value="0" name="Qty" id="Qty" />
                                    <button class="decrement">-</button>
                                    <button class="increment">+</button>
                                </div>
                                <p class="product__price">$ 0.00 MXN</p>
                            </div>
                        </div>
                        <i class="fas fa-x"></i>
                    </div>
                    <!-- <div class="total__bill">$ 0.00 MXN</div> -->
                    <a href="producto.php" class="back"><i class="fas fa-chevron-left"></i>Volver al producto</a>
                </div>
            </div>
            <div class="right">
                <div class="cart__total">
                    <h2>Total del carrito</h2>
                    <div class="subtotal">
                        <h4>Subtotal</h4>
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
                    <a href="/informacion" class="button__black">Finalizar Compra</a>
                    <div class="cart__bottom">
                        <p><i class="fas fa-shield"></i>Compra segura</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(".removeProduct").on("click", function() {
        const id = $(this).data("id");
        $.ajax({
            url: "/remove-from-cart",
            method: "POST",
            data: {
                product_id: id,
                "_token": "{{ csrf_token() }}",
            },
            success: function(response) {
                location.reload();
            }
        });
    });

    function updateCard(product_id, quantity) {
        $.ajax({
            url: "/update-cart",
            method: "POST",
            data: {
                product_id: product_id,
                quantity: quantity,
                "_token": "{{ csrf_token() }}",
            },
            success: function(response) {
                $("#carrito-container").html(response);
            }
        });
    }

    $(document).on("input", ".product-quantity", function() {
        updateCard($(this).data("id"), $(this).val());
    });

    $(document).on('click', ".increment", function() {
        let inputNumber = $(this).siblings('input[type="number"]');
        inputNumber.val(parseInt(inputNumber.val()) + 1);
        updateCard($(this).data("id"), inputNumber.val());
    });

    $(document).on('click', ".decrement", function() {
        let inputNumber = $(this).siblings('input[type="number"]');
        if (parseInt(inputNumber.val()) > 1) {
            inputNumber.val(parseInt(inputNumber.val()) - 1);
            updateCard($(this).data("id"), inputNumber.val());
        }
    });
</script>
@endpush