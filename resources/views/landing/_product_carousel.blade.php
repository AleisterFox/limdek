@if (isset($product))
<div class="equipo fadeInUp wow delay">
    <figure>
        <img src="{{ asset('images/' . $product->image) }}" alt="">
        <div class="tags">
            <div class="nuevo">
                <h5>Nuevo</h5>
            </div>
            <div class="agotado">
                <h5>Agotado</h5>
            </div>
        </div>
    </figure>
    <div class="calificacion">
        @if (false)
            <p>5.0</p>
            <i class="fas fa-star"></i>
        @endif
    </div>
    <h5>{{ $product->name }}</h5>
    <p class="precio">${{ $product->price }}</p>
</div>

@else

<div class="equipo fadeInUp wow delay">
    <figure>
        <img src="" alt="">
        <div class="tags">
            <div class="nuevo">
                <h5>Nuevo</h5>
            </div>
            <div class="agotado">
                <h5>Agotado</h5>
            </div>
        </div>
    </figure>
    <div class="calificacion">
        @if (false)
            <p>5.0</p>
            <i class="fas fa-star"></i>
        @endif
    </div>
    <h5>Nombre del producto</h5>
    <p class="precio">$100.00</p>

@endif
