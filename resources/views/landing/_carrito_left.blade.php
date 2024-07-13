@use('App\Services\CartService')

<div class="left">
    <div class="buying__cart">
        <div class="top">
            <h3>Tu carrito de compra</h3>
            <p class="number__articles">{{ CartService::getCount() }} Artículo{{ CartService::getCount() > 1 ? 's' : '' }}</p>
        </div>

        @foreach(CartService::getProducts() as $product)
        <div class="product">
            <figure><img src="{{ asset('/images/' . $product['product']->image) }}" alt="" /></figure>
            <div class="product__information">
                <h3 class="product__name">{{ $product['product']->name }}</h3>
                <div class="product__information--container">

                    <div class="input-group">
                        <input type="number" value="{{ $product['quantity'] }}" name="Qty" data-id="{{ $product['product']->id }}" />
                        <button class="decrement" data-id="{{ $product['product']->id }}">-</button>
                        <button class="increment" data-id="{{ $product['product']->id }}">+</button>
                    </div>
                    <p class="product__price">$ {{ $product['product']->price }} MXN</p>
                </div>
            </div>
            <i class="fas fa-x removeProduct" data-id="{{ $product['product']->id }}"></i>
        </div>

        @endforeach 
        <!-- <div class="total__bill">$ 0.00 MXN</div> -->
        <a href="/producto/{{ $product['product']->id }}" class="back"><i class="fas fa-chevron-left"></i>Volver al producto</a>
    </div>
</div>