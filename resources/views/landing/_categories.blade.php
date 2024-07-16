<section id="categorias">
    <h2 class="fadeInUp wow">Categorías</h2>
    <div class="container">
        @if ($categories->count() > 0)
            @foreach ($categories as $category)
                <a href="/productos" class="category">
                    <figure class="show wow"><img src="{{ asset('images/'. $category->image) }}" alt=""></figure>
                    <p>{{ $category->name }}</p>
                </a>
            @endforeach
        @else
        <a href="" class="category">
            <figure class="show wow"><img src="img/lambrin.png" alt=""></figure>
            <p>Lambrin WPC <br> Interior</p>
        </a>
        <a href="" class="category">
            <figure class="show wow"><img src="img/material-wpc.png" alt=""></figure>
            <p>Material WPC <br> Exterior</p>
        </a>
        <a href="" class="category">
            <figure class="show wow"><img src="img/material-pu.png" alt=""></figure>
            <p>Material PU</p>
        </a>
        <a href="" class="category">
            <figure class="show wow"><img src="img/laminas-marmol.png" alt=""></figure>
            <p>Láminas Tipo <br> Mármol</p>
        </a>
        @endif
    </div>
</section>