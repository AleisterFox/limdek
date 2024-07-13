<a href="/producto/{{ $product->id }}">
    <div class="equipo fadeIn wow sdelay">
        <figure><img src="{{ asset('/images/' . $product->image) }}" alt="">
            <div class="tags">
                <div class="nuevo">
                    <h5>{{ $product->name }}</h5>
                </div>
                <div class="agotado">
                    <h5>Agotado</h5>
                </div>
            </div>
        </figure>
        <div class="calificacion">
            <p>5.0</p>
            <i class="fas fa-star"></i>
        </div>
        <h5>{{ $product->description }}</h5>
        <p class="precio">${{ $product->price }}s</p>
    </div>
</a>