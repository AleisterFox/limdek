@extends('layouts.main')

@section('content')

<main>
    <section id="productos-hero">
        <figure class="portada"><img loading="lazy" src="/img/portada.jpg" alt=""></figure>
    </section>
    <div class="pb"></div>

    <input type="hidden" id="productId" value="{{ $product->id }}">
    <section id="product">
        <div class="container">
            <!-- <div class="side-gallery">
          <figure class="product__gallery--image active">
            <img loading="lazy" src="img/estereo.png" alt="" />
          </figure>
          <figure class="product__gallery--image">
            <img loading="lazy" src="img/invertidos.png" alt="" />
          </figure>
          <figure class="product__gallery--image">
            <img loading="lazy" src="img/microscopia.png" alt="" />
          </figure>
        </div> -->

            <!-- <div class="product-image">
          <figure class="product__image--active pi1">
            <img loading="lazy" src="img/estereo.png" alt="" />
          </figure>
        </div> -->

            <div class="glide" id="product-slider">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @if ($product->image2)
                        <li class="glide__slide product-image">
                            <figure class="portada pi1"><img loading="lazy" src="{{ asset('images/' . $product->image2) }}" alt="" /></figure>
                        </li>
                        @endif

                        @if ($product->image3)
                        <li class="glide__slide product-image">
                            <figure class="portada pi1"><img loading="lazy" src="{{ asset('images/' . $product->image3) }}" alt="" /></figure>
                        </li>
                        @endif

                        @if ($product->image4)
                        <li class="glide__slide product-image">
                            <figure class="portada pi1"><img loading="lazy" src="{{ asset('images/' . $product->image4) }}" alt="" /></figure>
                        </li>
                        @endif

                        @if ($product->image5)
                        <li class="glide__slide product-image">
                            <figure class="portada pi1"><img loading="lazy" src="{{ asset('images/' . $product->image5) }}" alt="" /></figure>
                        </li>
                        @endif
                    </ul>
                </div>
                <div data-glide-el="controls" class="slider__controls">
                    <button data-glide-dir="<"><i class="fas fa-chevron-left"></i></button>
                    <button data-glide-dir=">"><i class="fas fa-chevron-right"></i></button>
                </div>
            </div>

            <div class="product-info">
                <h2 class="product__title">{{ $product->name }}</h2>
                <div class="tags">
                    <div class="nuevo">
                        <h5>Nuevo</h5>
                    </div>
                    <div class="agotado">
                        <h5>Agotado</h5>
                    </div>
                </div>
                <div class="product-info__top">
                    <p class="price"><strong>$ {{ $product->price }} MXN</strong></p>
                    <div class="calificacion">
                        <p>5.0</p>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <p class="desc">{{ $product->description }}</p>

                <div class="adder">
                    <p>Cantidad</p>
                    <div class="input-group">
                        <input type="number" value="0" name="Qty" id="Qty" />
                        <button class="decrement">-</button>
                        <button class="increment">+</button>
                    </div>
                </div>

                <div class="product__buttons">
                    <a class="button__secondary add__product" id="add__product">Agregar al carrito</a>
                    <a class="button__secondary" id="get_product">Comprar</a>
                </div>

                <div class="product__image--zoom">
                    <figure class="product__image--active pi2">
                        <img loading="lazy" src="i/mg/us1.jpg" alt="" />
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section id="product-specs">
        <div class="left">
            <ul>
                <li>
                    <p><strong>Tamaño Panel</strong></p>
                    <p>{{ $product->size }}</p>
                </li>
                <li>
                    <p><strong>Largo de Panel</strong></p>
                    <p>{{ $product->large }}</p>
                </li>
                <li>
                    <p><strong>Metros cuadrados por panel</strong></p>
                    <p>{{ $product->meters }}</p>
                </li>
                <li>
                    <p><strong>Presentación</strong></p>
                    <p>{{ $product->presentation }}</p>
                </li>
                <li>
                    <p><strong>Área total caja</strong></p>
                    <p>{{ $product->area }}</p>
                </li>
                <li>
                    <p><strong>Metros cuadrados por caja</strong></p>
                    <p>{{ $product->square_meters }}</p>
                </li>
                <li>
                    <p><strong>Aplicaciones</strong></p>
                    <p>{{ $product->applications }}</p>
                </li>
                <li>
                    <p><strong>Reciclaje</strong></p>
                    <p>{{ $product->recycling }}</p>
                </li>
                <li>
                    <p><strong>Tiempo de vida</strong></p>
                    <p>{{ $product->life }}</p>
                </li>
                <li>
                    <p><strong>Mantenimiento</strong></p>
                    <p>{{ $product->maintenance }}</p>
                </li>
                <li>
                    <p><strong>Peso Caja</strong></p>
                    <p>{{ $product->weight }}</p>
                </li>
                <li>
                    <p><strong>Tamaño Caja</strong></p>
                    <p>{{ $product->box_size }}</p>
                </li>
            </ul>
        </div>
        <div class="right">
            <div class="imagen">
                <figure>
                    <img src="/img/lambrin.png" alt="">
                </figure>
            </div>

            <h2>Crea espacios interiores modernos y elegantes</h2>

            <p>Expresa tu estilo y crea espacios interiores modernos y elegantes con los nuevos paneles de madera WPC. Es el producto ideal para tu habitación, estudio, sala, oficina, lobby. <br> <br>

                Los paneles tipo lambrín WPC están disponibles en una amplia gama de colores y acabados que complementarán cualquier decoración. <br><br>

                Se pueden instalar de forma versátil en paredes y techos en espacios de interior. Están disponibles en un formato elegante de 2.9 m de alto, perfecto para una doble altura.</p>


            <section id="faqs" class="product-faqs">
                <div class="contenedor">
                    <div class="container">
                        <details>
                            <summary>
                                <h5>¿Qué contiene la caja?</h5> <i class="fas fa-chevron-down"></i>
                            </summary>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
                        </details>
                        <details>
                            <summary>
                                <h5>¿Tiempo de entrega?</h5> <i class="fas fa-chevron-down"></i>
                            </summary>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
                        </details>
                        <details>
                            <summary>
                                <h5>¿Porqué es la mejor opción para interiores?</h5> <i class="fas fa-chevron-down"></i>
                            </summary>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
                        </details>
                    </div>
                </div>
            </section>

        </div>
    </section>

    <section id="facilities">
        <div class="container">
            <div class="left">
                <figure class="fadeIn wow">
                    <img src="/img/instalacion.png" alt="">
                </figure>
            </div>
            <div class="right">
                <h2>Instalación</h2>
                <p>El WPC para interior es de fácil y rápida instalación, cualquier persona de mantenimiento o con habilidad de taladro lo puede instalar</p>
                <p>Para recortar el material se puede utilizar una sierra eléctrica.
                    La caja incluye los clips que fijan los paneles a la pared.</p>
                @if ($product->installation_video)
                    <a href="{{ $product->installation_video }}" class="button__secondary">Ver video de instalación</a>
                @endif
            </div>
        </div>
    </section>

    @include('landing._about')

    <section id="mas-vendidos">
        <h2 class="fadeInUp wow">Modelos de Interior</h2>
        <p class="fadeInUp wow">Expresa tu propio estilo, dales vida y crea espacios interiores modernos, <br> con nuestros elegantes modelos de interior.</p>
        <div class="slider__buttons">
            <div class="slide__button--left">
                <i class="fas fa-chevron-left"></i>
            </div>
            <div class="slide__button--right">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
        <div class="container">
            <div class="products__container">
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="/img/lambrin-interior.png" alt="">
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
                        <p>5.0</p>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5>Lambrin WPC Interior
                        Color Avellana Fondo Negro</h5>
                    <p class="precio">$9,900</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="/img/roca-pu.png" alt="">
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
                        <p>5.0</p>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5>Roca PU TURK Color
                        Grafito 60x120</h5>
                    <p class="precio">$1,300</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="/img/lambrin-interior2.png" alt="">
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
                        <p>5.0</p>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5>Lambrin WPC Interior
                        Color Parota</h5>
                    <p class="precio">$9,900</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="/img/roca-pu2.png" alt="">
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
                        <p>5.0</p>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5>Roca PU TURK Color
                        Greige 60x120</h5>
                    <p class="precio">$1,300</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="/img/lambrin-interior.png" alt="">
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
                        <p>5.0</p>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5>Lambrin WPC Interior
                        Color Avellana Fondo Negro</h5>
                    <p class="precio">$9,900</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="/img/roca-pu.png" alt="">
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
                        <p>5.0</p>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5>Roca PU TURK Color
                        Grafito 60x120</h5>
                    <p class="precio">$1,300</p>
                </div>
                <div class="equipo fadeInUp wow">
                    <figure><img src="/img/lambrin-interior2.png" alt="">
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
                        <p>5.0</p>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5>Lambrin WPC Interior
                        Color Parota</h5>
                    <p class="precio">$9,900</p>
                </div>
                <div class="equipo fadeInUp wow">
                    <figure><img src="/img/roca-pu2.png" alt="">
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
                        <p>5.0</p>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5>Roca PU TURK Color
                        Greige 60x120</h5>
                    <p class="precio">$1,300</p>
                </div>
            </div>
        </div>
    </section>

    <div class="pb"></div>

    <div class="cart__modal cart__modal--active">
        <div class="cart__modal--container">
            <div class="top">
                <div class="close__modal">
                    <i class="fas fa-x"></i>
                </div>
                <h2>Carrito de compra</h2>
            </div>
            <di id="cart-content"></div>
            <a href="carrito.php" class="button__secondary">Comprar ahora</a>
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
    var product = new Glide("#product-slider", {
        type: "carousel",
        perView: 1,
        autoplay: 5000,
        animationDuration: 2000,
        animationTimingFunction: "ease-in-out",
        pauseOnHover: true,
    });
    product.mount();
</script>

<script>
    const imgs1 = document.querySelectorAll(".pi1");
    const img2 = document.querySelector(".product__image--zoom");
    const zoomImg = document.querySelector(".pi2 > img");
    const mainImg = document.querySelector(".pi1 > img");
    const galleryImages = document.querySelectorAll(".glide__slide");
    const figures = document.querySelectorAll(".glide__slide > figure");
    const productSlider = document.querySelector('.glide__slides');

    imgs1.forEach(img1 => {
        img1.addEventListener("mousemove", (e) => ver(e, img1));
        img1.addEventListener("mouseout", () => {
            img2.style.display = "none";
        });
    });

    function ver(e, img1) {
        let mainImg = img1.firstElementChild;
        let srcAttr = mainImg.getAttribute("src");
        zoomImg.setAttribute("src", srcAttr);
        img1.style.cursor = "zoom-in";
        img2.style.display = "block";
        img2.style.boxShadow = "5px 5px 10px 0px gray";
        img2.style.border = "1px solid black";

        const rect = mainImg.getBoundingClientRect();
        let offsetX = e.clientX - rect.left;
        let half = img1.clientWidth / 2;
        if (offsetX < half) {
            offsetX = ((offsetX / img1.clientWidth) * 100) * (-1);
            offsetX += 50;
        } else {
            offsetX = (offsetX / img1.clientWidth) * 100;
            offsetX -= 50;
            offsetX = offsetX * (-1)
        }

        let offsetY = e.clientY - rect.top;

        if (offsetY < half) {
            offsetY = ((offsetY / img1.clientWidth) * 100) * (-1);
            offsetY += 50;
        } else {
            offsetY = (offsetY / img1.clientWidth) * 100;
            offsetY -= 50;
            offsetY = offsetY * (-1)
        }
        zoomImg.style.left = `${offsetX}%`;
        zoomImg.style.top = `${offsetY}%`;
        zoomImg.style.transform = "scale(1.4)";
    }

    const addToCartButton = document.getElementById("add__product");
    const getProduct = document.getElementById("get_product");
    const quantity = document.getElementById("Qty");
    const productId = document.getElementById("productId");

    function addToCart() {
        const params = {
            product_id: productId.value,
            quantity: quantity.value,
            "_token": "{{ csrf_token() }}",
        };
        return $.ajax({
            url: '/add-to-cart',
            method: 'POST',
            data: params,
            success: function(response) {
                $("#cart-content").html(response);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    getProduct.addEventListener('click', function() {
        addToCart().then(() => {
            window.location.href = '/carrito';
        });
    });

    addToCartButton.addEventListener('click', function() {
        addToCart();
    });

    $(document).on('click', '.delete__product', function() {
        $.ajax({
            url: '/remove-from-cart',
            method: 'POST',
            data: {
                product_id: $(this).data('product_id'),
                "_token": "{{ csrf_token() }}",
            },
            success: function(response) {
                window.location.reload();
            },
            error: function(error) {
                console.log(error);
            }
        });
    });
</script>
@endpush