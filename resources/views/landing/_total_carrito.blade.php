@use('App\Services\CartService')

@isset($order)

<div class="cart__total">
    <h2>Total del carrito</h2>

    @foreach($order->products as $item)
    <div class="cart__products">
        <div class="cart__products--product">
            <figure><img src="{{ asset('images/' . $item->image) }}" alt=""></figure>
            <div class="cart__product--description">
                <h4>{{ $item->name }}</h4>
            </div>
            <p>${{ $item->price }} MXN</p>
        </div>
    </div>
    @endforeach

    <div class="subtotal">
        <p>Subtotal</p>
        <p class="subtotal__amount">$ {{ $order->total }} MXN</p>
    </div>
    <div class="gastos__envio">
        <p>Calculando gastos de envío</p>
        <p class="subtotal__amount">$ 0.00 MXN</p>
    </div>
    <div class="total">
        <h3>Total</h3>
        <p class="total__amount">$ {{ $order->total }} MXN</p>
    </div>
</div>

@else

<div class="cart__total">
    <h2>Total del carrito</h2>

    @foreach(CartService::getProducts() as $item)
    <div class="cart__products">
        <div class="cart__products--product">
            <figure><img src="img/lambrin-interior.png" alt=""></figure>
            <div class="cart__product--description">
                <h4>{{ $item['product']->name }}</h4>
            </div>
            <p>${{ $item['product']->price }} MXN</p>
        </div>
    </div>
    @endforeach

    <div class="subtotal">
        <p>Subtotal</p>
        <p class="subtotal__amount">$ {{ CartService::getTotal() }} MXN</p>
    </div>
    <div class="gastos__envio">
        <p>Calculando gastos de envío</p>
        <p class="subtotal__amount">$ 0.00 MXN</p>
    </div>
    <div class="total">
        <h3>Total</h3>
        <p class="total__amount">$ {{ CartService::getTotal() }} MXN</p>
    </div>
</div>

@endisset