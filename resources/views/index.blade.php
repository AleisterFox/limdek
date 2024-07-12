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
                    <li class="glide__slide">
                        <figure class="portada"><img loading="lazy" src="img/portada.jpg" alt="" /></figure>
                        <div class="content">
                            <h1>Lambrin Interior</h1>
                            <a href="" class="button">Conocer</a>
                        </div>
                    </li>
                </ul>
                <div class="glide__bullets" data-glide-el="controls[nav]">
                    <button class="glide__bullet" data-glide-dir="=0"></button>
                    <button class="glide__bullet" data-glide-dir="=1"></button>
                    <button class="glide__bullet" data-glide-dir="=2"></button>
                    <button class="glide__bullet" data-glide-dir="=3"></button>
                </div>
            </div>
        </div>
    </section>

    <section id="categorias">
        <h2 class="fadeInUp wow">Categorías</h2>
        <div class="container">
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
        </div>
    </section>

    <section id="features">
        <div class="container">
            <div class="feature">
                <span><img src="img/envios-icon.png" alt=""></span>
                <h4>Envíos</h4>
                <p>Hacemos envíos a toda la República Mexicana.</p>
            </div>
            <div class="feature">
                <span><img src="img/servicio-icon.png" alt=""></span>
                <h4>Servicio al Cliente</h4>
                <p>¿Una pregunta? Comuníquese con nosotros al 123 456 7890</p>
            </div>
            <div class="feature">
                <span><img src="img/ubicación-icon.png" alt=""></span>
                <h4>Ubicación</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ligula elit, varius sed nunc ut, dignissim.</p>
            </div>
            <div class="feature">
                <span><img src="img/pagoseguro-icon.png" alt=""></span>
                <h4>Pago Seguro</h4>
                <p>Tu información de pago se procesa de forma segura</p>
            </div>
        </div>
    </section>

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
                        <p>5.0</p>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5>Lambrin WPC Interior
                        Color Avellana Fondo Negro</h5>
                    <p class="precio">$9,900</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/roca-pu.png" alt="">
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
                    <figure><img src="img/lambrin-interior2.png" alt="">
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
                    <figure><img src="img/roca-pu2.png" alt="">
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
                        <p>5.0</p>
                        <i class="fas fa-star"></i>
                    </div>
                    <h5>Lambrin WPC Interior
                        Color Avellana Fondo Negro</h5>
                    <p class="precio">$9,900</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/roca-pu.png" alt="">
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
                    <figure><img src="img/lambrin-interior2.png" alt="">
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
                    <figure><img src="img/roca-pu2.png" alt="">
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
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/lamina1.png" alt="">
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
                    <h5>Lámina PVC tipo Mármol color
                        Negro</h5>
                    <p class="precio">$1,500</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/lamina2.png" alt="">
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
                    <h5>Lámina PVC tipo Mármol color
                        Gris</h5>
                    <p class="precio">$1,500</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/lamina3.png" alt="">
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
                    <h5>Lámina PVC Color Traventino</h5>
                    <p class="precio">$1,500</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/lamina4.png" alt="">
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
                    <h5>Lámina PVC tipo Mármol Color
                        Blanco</h5>
                    <p class="precio">$1,500</p>
                </div>

                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/lamina1.png" alt="">
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
                    <h5>Lámina PVC tipo Mármol color
                        Negro</h5>
                    <p class="precio">$1,500</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/lamina2.png" alt="">
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
                    <h5>Lámina PVC tipo Mármol color
                        Gris</h5>
                    <p class="precio">$1,500</p>
                </div>
                <div class="equipo fadeInUp wow">
                    <figure><img src="img/lamina3.png" alt="">
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
                    <h5>Lámina PVC Color Traventino</h5>
                    <p class="precio">$1,500</p>
                </div>
                <div class="equipo fadeInUp wow">
                    <figure><img src="img/lamina4.png" alt="">
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
                    <h5>Lámina PVC tipo Mármol Color
                        Blanco</h5>
                    <p class="precio">$1,500</p>
                </div>
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
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/viga1.png" alt="">
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
                    <h5>Viga Interior WPC
                        50x100x2900 mm Color
                        Maple Blossom</h5>
                    <p class="precio">$600</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/viga2.png" alt="">
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
                    <h5>Viga Interior WPC
                        50x100x2900mm Color
                        Negro Texturizado</h5>
                    <p class="precio">$600</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/viga1.png" alt="">
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
                    <h5>Viga Interior WPC
                        50x100x2900 mm Color
                        Maple Blossom</h5>
                    <p class="precio">$600</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/viga2.png" alt="">
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
                    <h5>Viga Interior WPC
                        50x100x2900mm Color
                        Negro Texturizado</h5>
                    <p class="precio">$600</p>
                </div>

                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/viga1.png" alt="">
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
                    <h5>Viga Interior WPC
                        50x100x2900 mm Color
                        Maple Blossom</h5>
                    <p class="precio">$600</p>
                </div>
                <div class="equipo fadeInUp wow delay">
                    <figure><img src="img/viga2.png" alt="">
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
                    <h5>Viga Interior WPC
                        50x100x2900mm Color
                        Negro Texturizado</h5>
                    <p class="precio">$600</p>
                </div>
                <div class="equipo fadeInUp wow">
                    <figure><img src="img/viga1.png" alt="">
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
                    <h5>Viga Interior WPC
                        50x100x2900 mm Color
                        Maple Blossom</h5>
                    <p class="precio">$600</p>
                </div>
                <div class="equipo fadeInUp wow">
                    <figure><img src="img/viga2.png" alt="">
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
                    <h5>Viga Interior WPC
                        50x100x2900mm Color
                        Negro Texturizado</h5>
                    <p class="precio">$600</p>
                </div>


            </div>
        </div>
    </section>

    <section id="servicios">
        <h2 class="fadeInUp wow">Beneficios Materiales WPC</h2>
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
                <p>Nos enorgullece ofrecer envíos a toda la República Mexicana.
                    Para garantizarte la mejor entrega de tus materiales, trabajamos con empresas especializadas en transporte de muebles.</p>
                <p>El tiempo estimado de entrega es de 4 a 15 días hábiles, teniendo en cuenta que el
                    tamaño de los materiales es irregular. ¡Te garantizamos un servicio seguro y confiable
                    para que tus materiales lleguen a su destino en perfecto estado!</p>
                <p>Nuestro servicio de atención al cliente está disponible de lunes a viernes de 10:00 a. m. a
                    7:00 p.m. y sábados de 10:00 a.m. a 2:00 p.m.</p>
            </div>
            <div class="container">
                <details class="fadeInRight wow">
                    <summary>
                        <h5>¿Hacen envíos internacionales?</h5> <i class="fas fa-chevron-down"></i>
                    </summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
                </details>
                <details class="fadeInRight wow">
                    <summary>
                        <h5>¿Cuánto tiempo tarda en llegar mi paquete?</h5> <i class="fas fa-chevron-down"></i>
                    </summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
                </details>
                <details class="fadeInRight wow">
                    <summary>
                        <h5>¿Cuánto tiempo tarda en llegar mi paquete?</h5> <i class="fas fa-chevron-down"></i>
                    </summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
                </details>
                <details class="fadeInRight wow">
                    <summary>
                        <h5>¿Por qué mi envío tarda más que el promedio?</h5> <i class="fas fa-chevron-down"></i>
                    </summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
                </details>
                <details class="fadeInRight wow">
                    <summary>
                        <h5>¿Hay alguna forma de acelerar el envío de mi paquete irregular?</h5> <i class="fas fa-chevron-down"></i>
                    </summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
                </details>
                <details class="fadeInRight wow">
                    <summary>
                        <h5>¿Qué pasa si mi paquete no llega en el plazo de 15 días hábiles?</h5> <i class="fas fa-chevron-down"></i>
                    </summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
                </details>
                <details class="fadeInRight wow">
                    <summary>
                        <h5>Lorem Ipsum</h5> <i class="fas fa-chevron-down"></i>
                    </summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
                </details>
                <details class="fadeInRight wow">
                    <summary>
                        <h5>Lorem Ipsum</h5> <i class="fas fa-chevron-down"></i>
                    </summary>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus iure mollitia, necessitatibus sit blanditiis obcaecati tempore consequatur vero! Atque amet ipsum nisi voluptate sed illo in voluptatem aliquam quisquam.</p>
                </details>
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