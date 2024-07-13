@use('App\Services\CartService')
<div class="products">
    @foreach(CartService::getProducts() as $product)
    <div class="product">
        <div class="product__info">
            <figure>
                <img src="{{ asset('/images/' . $product['product']->image) }}" alt="Imagen" />
            </figure>
            <div class="product__info--data">
                <h4 class="product__name">{{ $product['product']->name }}</h4>
                <div class="input-group" style="display: none;">
                    <input type="number" value="0" name="Qty" id="Qty" />
                    <button class="decrement">-</button>
                    <button class="increment">+</button>
                </div>
            </div>
            <p class="product__price">$ {{ $product['product']->price }} MXN</p>
        </div>
    </div>
    @endforeach
</div>
<div class="costos">
    <div class="subtotal">
        <h4>Subtotal</h4>
        <p class="subtotal__amount">$ {{ CartService::getTotal() }} MXN</p>
    </div>
    <div class="entrega">
        <h4>Entrega</h4>
        <p class="subtotal__amount">Por calcular</p>
    </div>
    <div class="total">
        <h3>Total</h3>
        <p class="total__amount">$ {{ CartService::getTotal() }} MXN</p>
    </div>
</div>