@extends('layouts.main')

@section('content')
@use('App\Models\LadingPageConfig')
@php
$instace = LadingPageConfig::getInstance();
@endphp
<main>
    <section id="hero">
        <div class="glide" id="hero-slider">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    @if ($slides->count() > 0)
                        @foreach($slides as $slide)
                            <li class="glide__slide">
                                <figure class="portada">
                                    <img loading="lazy" src="{{ asset('slides/' . $slide->image) }}" alt="" />
                                </figure>
                                <div class="content">
                                    <h1>{{ $slide->title }}</h1>
                                    <a href="{{ $slide->button_link }}" class="button">{{ $slide->button_text }}</a>
                                </div>
                            </li>
                        @endforeach
                    @else
                        <li class="glide__slide">
                            <figure class="portada">
                                <img loading="lazy" src="img/portada.jpg" alt="" />
                            </figure>
                            <div class="content">
                                <h1>Lambrin Interior</h1>
                                <a href="" class="button">Conocer</a>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <figure class="portada"><img loading="lazy" src="img/portada.jpg" alt="" /></figure>
                            <div class="content">
                                <h1>Lambrin Interior</h1>
                                <a href="" class="button">Conocer</a>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <figure class="portada"><img loading="lazy" src="img/portada.jpg" alt="" /></figure>
                            <div class="content">
                                <h1>Lambrin Interior</h1>
                                <a href="" class="button">Conocer</a>
                            </div>
                        </li>
                        <li class="glide__slide">
                            <figure class="portada"><img loading="lazy" src="img/portada.jpg" alt="" /></figure>
                            <div class="content">
                                <h1>Lambrin Interior</h1>
                                <a href="" class="button">Conocer</a>
                            </div>
                        </li>
                    @endif
                </ul>
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    @if ($slides->count() > 0)
                        @foreach($slides as $slide)
                            <button class="glide__bullet" data-glide-dir="={{$loop->index}}"></button>
                        @endforeach
                    @else
                        <button class="glide__bullet" data-glide-dir="=0"></button>
                        <button class="glide__bullet" data-glide-dir="=1"></button>
                        <button class="glide__bullet" data-glide-dir="=2"></button>
                        <button class="glide__bullet" data-glide-dir="=3"></button>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @include('landing._categories')

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
                @if ($products->count() > 0)
                    @each('landing._product_carousel', $products, 'product')
                @else

                    @if (false)
                        @for($i = 1; $i <= 10; $i++)
                            @include('landing._product_carousel')
                        @endfor
                    @endif

                @endif
            </div>
        </div>
    </section>

    <section id="mas-vendidos">
        <h2 class="fadeInUp wow">Lámina PVC tipo mármol</h2>
        <p class="fadeInUp wow">La hoja de mármol de panel de pared de PVC es un tipo de revestimiento para <br>
            paredes que imita el aspecto del mármol natural.</p>
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
                @if ($products->count() > 0)
                    @each('landing._product_carousel', $products, 'product')
                @else

                    @if (false)
                        @for($i = 1; $i <= 10; $i++)
                            @include('landing._product_carousel')
                        @endfor
                    @endif

                @endif
            </div>
        </div>
    </section>

    <section id="mas-vendidos">
        <h2 class="fadeInUp wow">Vigas de Interior</h2>
        <p class="fadeInUp wow">Disponibles en un formato elegante y con variedad de colores.</p>
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
                @if ($products->count() > 0)
                    @each('landing._product_carousel', $products, 'product')
                @else
                    @if (false)
                        @for($i = 1; $i <= 10; $i++)
                            @include('landing._product_carousel')
                        @endfor
                    @endif
                @endif
            </div>
        </div>
    </section>

    <section id="servicios">
        <h2 class="fadeInUp wow">Beneficios Materiales WPC</h2>
        @if ($instace->banner_image_1)
        <div class="container">
            <div class="left">
                <figure class="show wow">
                    <img src="{{ asset('images/' . $instace->banner_image_1) }}" alt="">
                </figure>
            </div>
            <div class="right fadeInUp wow">
                <p>{!! $instace->banner_text_1 !!}</p>
            </div>
        </div>
        @else 
        <div class="container">
            <div class="left">
                <figure class="show wow">
                    <img src="img/durabilidad.png" alt="">
                </figure>
            </div>
            <div class="right fadeInUp wow">
                <h2>Durabilidad</h2>
                <p>La durabilidad de los materiales WPC es uno de sus principales beneficios. Los materiales WPC están hechos de una combinación de madera y plástico, lo que les confiere una resistencia superior a la humedad, insectos, y a la rotura en comparación con la madera natural.</p>
                <p>Además, no requieren pintura ni sellado, lo que los hace más duraderos y menos propensos a la degradación a lo largo del tiempo.</p>
            </div>
        </div>
        @endif

        @if ($instace->banner_image_2)
        <div class="container fondo">
            <div class="right fadeInUp wow">
                <p>{!! $instace->banner_text_2 !!}</p>
            </div>

            <div class="left">
                <figure class="show wow">
                    <img src="{{ asset('images/' . $instace->banner_image_2) }}" alt="">
                </figure>
            </div>
        </div>
        @else
        <div class="container fondo">
            <div class="right fadeInUp wow">
                <h2>Bajo
                    mantenimiento</h2>
                <p>Los materiales WPC son una opción más sostenible y amigable con el medio ambiente en comparación con otros materiales de construcción, lo que los hace una opción atractiva para aquellos que buscan minimizar su impacto ambiental.</p>
            </div>

            <div class="left">
                <figure class="show wow">
                    <img src="img/durabilidad.png" alt="">
                </figure>
            </div>
        </div>
        @endif

        @if ($instace->banner_image_3)
        <div class="container">
            <div class="left">
                <figure class="show wow">
                    <img src="{{ asset('images/' . $instace->banner_image_3) }}" alt="">
                </figure>
            </div>
            <div class="right fadeInUp wow">
                <p>{!! $instace->banner_text_3 !!}</p>
            </div>
        </div>
        @else
        <div class="container">
            <div class="left">
                <figure class="show wow">
                    <img src="img/bajo.png" alt="">
                </figure>
            </div>
            <div class="right fadeInUp wow">
                <h2>Bajo impacto <br>
                    ambiental</h2>
                <p>Los materiales WPC son una opción más sostenible y amigable con el medio ambiente en comparación con otros materiales de construcción, lo que los hace una opción atractiva para aquellos que buscan minimizar su impacto ambiental.</p>
                <p>Para su producción se utilizan materiales reciclados, como residuos de madera y plásticos.</p>
                <p>Los materiales WPC pueden ser reciclados después de su uso, lo que los hace más sostenibles que otros materiales de construcción no reciclables.</p>
            </div>
        </div>
        @endif

        @if ($instace->banner_image_4)
        <div class="container fondo">
            <div class="right fadeInUp wow">
                <p>{!! $instace->banner_text_4 !!}</p>
            </div>

            <div class="left">
                <figure class="show wow">
                    <img src="{{ asset('images/' . $instace->banner_image_4) }}" alt="">
                </figure>
            </div>
        </div>
        @else
        <div class="container fondo">
            <div class="right fadeInUp wow">
                <h2>Bajo
                    mantenimiento</h2>
                <p>Los materiales WPC son una opción más sostenible y amigable con el medio ambiente en comparación con otros materiales de construcción, lo que los hace una opción atractiva para aquellos que buscan minimizar su impacto ambiental.</p>
            </div>

            <div class="left">
                <figure class="show wow">
                    <img src="img/bajo.png" alt="">
                </figure>
            </div>
        </div>
        @endif
    </section>

    <!-- <section id="us">
      <div class="top">
        <div class="left">
          <figure><img src="img/s1.png" alt=""></figure>
        </div>
        <div class="right">
          <h2>Acerca de nosotros</h2>
          <p>Somos una empresa creada en 2013, contamos con la experiencia en diversas áreas médicas y atendemos diferentes tipos clientes como médicos especialistas, consultorios, hospitales y laboratorios de investigación, educativos y clínicos.
            <br> <br>
            Nos proponemos ser una empresa comprometida que el uso de la tecnología médica para el beneficio de nuestros clientes, que desarrollan diversos roles en la salud, educación e investigación, poniendo a su alcance equipos de la más alta calidad, apoyando en la asesoría para entender sus expectativas, instalación y capacitación a los involucrados.
          </p>
        </div>
      </div>
      <div class="bottom">
        <div class="left">
          <h2>Visión</h2>
          <p>Ser una empresa esencial para el sector salud y educativo al ofrecer productos y servicios diferenciados para ayudar a fortalecer la aplicación de tecnología médica con el fin de incrementar la calidad del sector salud y educativo.</p>
        </div>
        <div class="right">
          <h2>Misión</h2>
          <p>Convertirnos en una empresa esencial para nuestros clientes al dar productos y servicios diferenciados con el fin de ayudarlos a seleccionar y usar tecnología médica, según los requerimientos de cada cliente. </p>
        </div>
      </div>
    </section>

    <section id="clientes">
      <h2>Algunos de nuestros distinguidos clientes</h2>
      <div class="container">
        <figure><img src="img/uabc.png" alt=""></figure>
        <figure><img src="img/itt.png" alt=""></figure>
        <figure><img src="img/uabc.png" alt=""></figure>
      </div>
    </section> -->

    <section id="faqs" style="overflow: hidden;">
        <div class="contenedor">
            <div class="texto">
                <h2>FAQ</h2>
                <p>{!! $instace->faq !!}</p>
            </div>
            <div class="container">
                @if ($instace->question_1)
                <details class="fadeInRight wow">
                    <summary>
                        <h5>{{ $instace->question_1 }}</h5> <i class="fas fa-chevron-down"></i>
                    </summary>
                    <p>{{ $instace->answer_1 }}</p>
                </details>
                @endif
                @if ($instace->question_2)
                <details class="fadeInRight wow">
                    <summary>
                        <h5>{{ $instace->question_2 }}</h5> <i class="fas fa-chevron-down"></i>
                    </summary>
                    <p>{{ $instace->answer_1 }}</p>
                </details>
                @endif
                @if ($instace->question_3)
                <details class="fadeInRight wow">
                    <summary>
                        <h5>{{ $instace->question_3 }}</h5> <i class="fas fa-chevron-down"></i>
                    </summary>
                    <p>{{ $instace->answer_3 }}</p>
                </details>
                @endif
                @if ($instace->question_4)
                <details class="fadeInRight wow">
                    <summary>
                        <h5>{{ $instace->question_4 }}</h5> <i class="fas fa-chevron-down"></i>
                    </summary>
                    <p>{{ $instace->answer_3 }}</p>
                </details>
                @endif
                @if ($instace->question_5)
                <details class="fadeInRight wow">
                    <summary>
                        <h5>{{ $instace->question_5 }}</h5> <i class="fas fa-chevron-down"></i>
                    </summary>
                    <p>{{ $instace->answer_5 }}</p>
                </details>
                @endif
            </div>
        </div>
    </section>

    <section id="facilities">
        <div class="container">
            <div class="left">
                <figure class="fadeIn wow">
                    <img src="img/instalacion.png" alt="">
                </figure>
            </div>
            <div class="right">
                <h2>Instalación</h2>
                <p>El WPC para interior es de fácil y rápida instalación, cualquier persona de mantenimiento o con habilidad de taladro lo puede instalar</p>
                <p>Para recortar el material se puede utilizar una sierra eléctrica.
                    La caja incluye los clips que fijan los paneles a la pared.</p>
                <a href="" class="button__secondary">Ver video de instalación</a>
            </div>
        </div>
    </section>

    @include('landing._contact_form')

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
                    <p class="subtotal__amount">Por calcular</p>
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
    var glide = new Glide("#hero-slider", {
        type: "carousel",
        perView: 1,
        autoplay: 5000,
        animationDuration: 2000,
        animationTimingFunction: "ease-in-out",
    });
    glide.mount();
</script>
@endpush