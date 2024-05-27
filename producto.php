<!DOCTYPE html>
<html lang="es" xml:lang="es" style="overflow-x: visible">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Molcajete" />
  <meta name="description" content="Cardiología clínica.
    Subespecialista formado en centro médico nacional Siglo XXI Ciudad de México.
    Diagnostico y tratamiento de las enfermedades Cardiovasculares (insuficiencia cardiaca, arritmias, bradicardia, taquicardia, bloqueo auriculoventricular, cardiopatía isquémica aguda o crónica, miocardiopatías, enfermedades del pericardio, Hipertensión arterial sistémica, estenosis carotidea, Enfermedad valvular cardiaca, entre otros).
    Diagnostico especializado con herramientas diagnosticas como ecocardiograma, monitoreo Holter, monitoreo ambulatorio de la presión arterial, Prueba de esfuerzo." />

  <meta name="Keywords" content="Doctor, Bulmaro Irving Padilla Gomez, salud, cardiología, cardiologo, internista, especialidad, científico, investigación, Puerto Vallarta, México" />

  <meta name="robots" content="all" />
  <meta property="og:title" content="Tecnobiomedica" />
  <meta property="og:description" content="Cardiología clínica.
    Subespecialista formado en centro médico nacional Siglo XXI Ciudad de México.
    Diagnostico y tratamiento de las enfermedades Cardiovasculares (insuficiencia cardiaca, arritmias, bradicardia, taquicardia, bloqueo auriculoventricular, cardiopatía isquémica aguda o crónica, miocardiopatías, enfermedades del pericardio, Hipertensión arterial sistémica, estenosis carotidea, Enfermedad valvular cardiaca, entre otros).
    Diagnostico especializado con herramientas diagnosticas como ecocardiograma, monitoreo Holter, monitoreo ambulatorio de la presión arterial, Prueba de esfuerzo." />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="../img/imagen.png" />
  <meta property="og:image:width" content="300" />
  <meta property="og:image:height" content="300" />
  <meta property="og:site_name" content="Tecnobiomedica" />
  <meta name="msapplication-TileColor" content="rgb(16, 48, 55)" />
  <meta name="theme-color" content="rgb(16, 48, 55)" />

  <?php include 'elements/estilos.php' ?>

  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <title>Tecnobiomedica</title>
</head>

<body>
  <div class="whatsapp">
    <a href="https://wa.link/d53e1z" target="_blank"><i class="fab fa-whatsapp"></i></a>
  </div>

  <!-- <div class="loader__screen" id="loader">
    <div id="wifi-loader">
      <svg class="circle-outer" viewBox="0 0 86 86">
        <circle class="back" cx="43" cy="43" r="40"></circle>
        <circle class="front" cx="43" cy="43" r="40"></circle>
        <circle class="new" cx="43" cy="43" r="40"></circle>
      </svg>
      <svg class="circle-middle" viewBox="0 0 60 60">
        <circle class="back" cx="30" cy="30" r="27"></circle>
        <circle class="front" cx="30" cy="30" r="27"></circle>
      </svg>
      <svg class="circle-inner" viewBox="0 0 34 34">
        <circle class="back" cx="17" cy="17" r="14"></circle>
        <circle class="front" cx="17" cy="17" r="14"></circle>
      </svg>
      <div class="text" data-text="Loading..."></div>
    </div>
  </div> -->

  <?php include 'elements/header.php' ?>

  <main>
    <section id="productos-hero">
      <figure class="portada"><img loading="lazy" src="img/portada.jpg" alt=""></figure>
    </section>
    <div class="pb"></div>

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
              <li class="glide__slide product-image">
                <figure class="portada pi1"><img loading="lazy" src="img/lambrin-interior.png" alt="" /></figure>
              </li>
              <li class="glide__slide product-image">
                <figure class="portada pi1"><img loading="lazy" src="img/lambrin-interior2.png" alt="" /></figure>
              </li>
              <li class="glide__slide product-image">
                <figure class="portada pi1"><img loading="lazy" src="img/lambrin-interior.png" alt="" /></figure>
              </li>
              <li class="glide__slide product-image">
                <figure class="portada pi1"><img loading="lazy" src="img/lambrin-interior2.png" alt="" /></figure>
              </li>
            </ul>
          </div>
          <div data-glide-el="controls" class="slider__controls">
            <button data-glide-dir="<"><i class="fas fa-chevron-left"></i></button>
            <button data-glide-dir=">"><i class="fas fa-chevron-right"></i></button>
          </div>
        </div>

        <div class="product-info">
          <h2 class="product__title">Lorem Ipsum</h2>
          <div class="tags">
            <div class="nuevo">
              <h5>Nuevo</h5>
            </div>
            <div class="agotado">
              <h5>Agotado</h5>
            </div>
          </div>
          <div class="product-info__top">
            <p class="price"><strong>$ 0.00 MXN</strong></p>
            <div class="calificacion">
              <p>5.0</p>
              <i class="fas fa-star"></i>
            </div>
          </div>
          <p class="desc">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean
            eget dui quis diam gravida sollicitudin in nec ex. Aenean pharetra
            viverra est a sodales. Nam non turpis ut est gravida ornare.
          </p>

          <div class="adder">
            <p>Cantidad</p>
            <div class="input-group">
              <input type="number" value="0" name="Qty" id="Qty" />
              <button class="decrement">-</button>
              <button class="increment">+</button>
            </div>
          </div>

          <div class="product__buttons">
            <a href="javascript:void(0);" class="button__secondary add__product">Agregar al carrito</a>
            <a href="carrito.php" class="button__secondary">Comprar</a>
          </div>

          <div class="product__image--zoom">
            <figure class="product__image--active pi2">
              <img loading="lazy" src="img/us1.jpg" alt="" />
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
            <p>2.90 m x 0.16 m</p>
          </li>
          <li>
            <p><strong>Largo de Panel</strong></p>
            <p>Ajustable (Se puede recortar)</p>
          </li>
          <li>
            <p><strong>Metros cuadrados por panel</strong></p>
            <p>0.46 m²</p>
          </li>
          <li>
            <p><strong>Presentación</strong></p>
            <p>Caja con 18 paneles</p>
          </li>
          <li>
            <p><strong>Área total caja</strong></p>
            <p>2.90 m x 2.90 m</p>
          </li>
          <li>
            <p><strong>Metros cuadrados por caja</strong></p>
            <p>8.4 m²</p>
          </li>
          <li>
            <p><strong>Aplicaciones</strong></p>
            <p>Uso exclusivo para INTERIOR. Habitación,
              estudio, sala, oficina, lobby, cocina, baño,
              techo, cabeceras, hoteles, recepción,
              consultorio, Airbnb.</p>
          </li>
          <li>
            <p><strong>Reciclaje</strong></p>
            <p>100% reciclable</p>
          </li>
          <li>
            <p><strong>Tiempo de vida</strong></p>
            <p>10 años</p>
          </li>
          <li>
            <p><strong>Mantenimiento</strong></p>
            <p>10 Mínimo mantenimiento</p>
          </li>
          <li>
            <p><strong>Peso Caja</strong></p>
            <p>53 kg</p>
          </li>
          <li>
            <p><strong>Tamaño Caja</strong></p>
            <p>3 m x 0.20 m x 0.20 m</p>
          </li>
        </ul>
      </div>
      <div class="right">
        <div class="imagen">
          <figure>
            <img src="img/lambrin.png" alt="">
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
          <figure>
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
      <h2>Modelos de Interior</h2>
      <p>Expresa tu propio estilo, dales vida y crea espacios interiores modernos, <br> con nuestros elegantes modelos de interior.</p>
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
          <div class="equipo">
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
          <div class="equipo">
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
          <div class="equipo">
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
          <div class="equipo">
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
          <div class="equipo">
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
          <div class="equipo">
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
          <div class="equipo">
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
          <div class="equipo">
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
    <div class="pb"></div>

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
              <figure><img loading="lazy" src="img/lambrin-interior.png" alt="" /></figure>
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
        <a href="carrito.php" class="button__secondary">Comprar ahora</a>
        <div class="cart__bottom">
          <a href="javascript:void(0);" class="keep__buying">Seguir comprando</a>
          <a href="javascript:void(0);">Vaciar carrito</a>
        </div>
      </div>
    </div>

  </main>

  <?php include 'elements/footer.php' ?>
</body>
<script src="js/script.js"></script>
<script src="js/adder.js"></script>
<script src="js/cartModal.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/loader.js"></script>
<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

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
</script>

</html>