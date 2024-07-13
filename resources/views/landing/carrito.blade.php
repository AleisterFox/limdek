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
        <div class="container" id="carrito-container">
            @include('landing._carrito_left')
            @include('landing._carrito_right')
        </div>
    </section>
</main>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
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