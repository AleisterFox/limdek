@extends('layouts.main')

@section('content')
@use('App\Services\CartService')

<main>
    <section id="productos-hero">
        <figure class="portada"><img loading="lazy" src="img/portada.jpg" alt=""></figure>
        <h2 class="product-title">Modelos de Interior</h2>
    </section>
    <section id="productos">

        <div class="toggle__filters">
            <i class="fas fa-sliders-simple"></i>
        </div>
        <div class="container">

            <div class="filters-menu">

                <div class="filters">
                    <div class="size">
                        <h4>Categorias</h4>
                        <div class="size-option">
                            <input type="checkbox" id="default-category" name="categories" class="category-checkbox" value="0" checked>
                            <label for="default-category">Todos</label>
                        </div>

                        @foreach($categories as $category)
                        <div class="size-option">
                            <input type="checkbox" name="categories" id="category-{{ $category->id }}" class="category-checkbox" value="{{ $category->id }}">
                            <label for="category-{{ $category->id }}">{{ $category->name }}</label>
                        </div>
                        @endforeach
                    </div>

                    <!-- <div class="price">
                        <h4>PRECIO</h4>
                        <div class="slider">
                            <div class="progress"></div>
                            <div class="range-input">
                                <input type="range" class="range-min" min="0" max="10000" value="2500">
                                <input type="range" class="range-max" min="0" max="10000" value="7500">
                            </div>
                        </div>  
                        <div class="price-input">
                            <div class="field">
                                <input type="number" class="price-min" value="2500" name="" id="">
                            </div>
                            <div class="separator"><p>-</p></div>
                            <div class="field">
                                <input type="number" class="price-max" value="7500" name="" id="">
                            </div>
                        </div>
                    </div> -->
                </div>

            </div>

            <div class="micros prd products-container">
                @if ($products->count() > 0)
                @each('landing._product', $products, 'product')
                @else
                <a href="/producto">
                    <div class="equipo fadeIn wow sdelay">
                        <figure><img src="img/lambrin-interior.png" alt="">
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
                        <h5>Lambrin WPC Interior
                            Color Avellana Fondo Negro</h5>
                        <p class="precio">$9,900</p>
                    </div>
                </a>
                @endif
            </div>
        </div>
    </section>

    @include('landing._about')
    <div class="cart__modal cart__modal--active">
        <div class="cart__modal--container">
            <div class="top">
                <div class="close__modal">
                    <i class="fas fa-x"></i>
                </div>
                <h2>Carrito de compra</h2>
            </div>
            <div class="products">
                <div class="product">

                    <div class="product__info">
                        <figure><img loading="lazy" src="img/mezcal.png" alt="" /></figure>
                        <div class="product__info--data">
                            <h4 class="product__name">Nombre del producto</h4>
                            <div class="input-group">
                                <input type="number" value="0" name="Qty" id="Qty" />
                                <button class="decrement">-</button>
                                <button class="increment">+</button>
                            </div>
                        </div>
                        <p class="product__price">$ 0.00 MXN</p>
                    </div>

                </div>
            </div>
            <div class="costos">
                <div class="subtotal">
                    <h4>Subtotal</h4>
                    <p class="subtotal__amount">$ 0.00 MXN</p>
                </div>
                <div class="entrega">
                    <h4>Entrega</h4>
                    <p class="subtotal__amount">Por calcular2</p>
                </div>
                <div class="total">
                    <h3>Total</h3>
                    <p class="total__amount">$ 0.00 MXN</p>
                </div>
            </div>
            <a href="carrito.php" class="button">Comprar ahora</a>
            <div class="cart__bottom">
                <a href="javascript:void(0);" class="keep__buying">Seguir comprando</a>
                <a href="javascript:void(0);">Vaciar carrito</a>
            </div>
        </div>
    </div>
</main>

@endsection

@push('scripts')

<script>
    var proyectos = new Glide("#projects-slider", {
        type: "carousel",
        perView: 3,
        breakpoints: {
            768: {
                perView: 2,
            },
            550: {
                perView: 1,
            },
        },
        autoplay: 5000,
        animationDuration: 2000,
        animationTimingFunction: "ease-in-out",
        pauseOnHover: true,
    });
    proyectos.mount();
</script>

<script>
    const toggleFilters = document.querySelector('.toggle__filters');
    const filtersMenu = document.querySelector('.filters-menu');

    toggleFilters.addEventListener('click', () => {
        if (filtersMenu.style.display != 'block') {
            filtersMenu.style.display = 'block';
            filtersMenu.style.animation = 'showMenu 500ms linear';
        } else {
            filtersMenu.style.animation = 'hideMenu 500ms linear';
            setTimeout(() => {
                filtersMenu.style.display = 'none';
            }, 500);

        }
    });

    $(".category-checkbox").on('click', function() {

        if ($(this).val() != 0) {
            $('#default-category').prop('checked', false);
        } else {
            $('.category-checkbox').prop('checked', false);
            $(this).prop('checked', true);
        }

        let categories = $('.category-checkbox:checked').map(function() {
            return $(this).val();
        }).get();

        $.ajax({
            url: '/productos',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                categories: categories
            },
            success: function(data) {
                $('.products-container').html(data);
            }
        });
    });
</script>

@endpush