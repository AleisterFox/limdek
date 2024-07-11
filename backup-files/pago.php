<!DOCTYPE html>
<html lang="es" xml:lang="es" style="overflow-x: visible">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="author" content="Molcajete" />
  <meta name="description" content="Transform your spaces with our stylish interior models, PVC marble sheets, and elegant interior beams. Our durable WPC materials offer superior resistance to moisture, insects, and breakage, ensuring long-lasting beauty without the need for painting or sealing" />

  <meta name="Keywords" content="Interior Models, Stylish Interior Designs, PVC Marble Sheets, Wall Panels, Marble-Look PVC, Interior Beams, Elegant Beams, WPC Materials, Durable WPC, Wood-Plastic Composite, Moisture-Resistant Materials, Insect-Resistant Materials, Low-Maintenance Building Materials, Home Improvement Solutions" />

  <meta name="robots" content="all" />
  <meta property="og:title" content="Limdek" />
  <meta property="og:description" content="Transform your spaces with our stylish interior models, PVC marble sheets, and elegant interior beams. Our durable WPC materials offer superior resistance to moisture, insects, and breakage, ensuring long-lasting beauty without the need for painting or sealing" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="../img/icono.png" />
  <meta property="og:image:width" content="300" />
  <meta property="og:image:height" content="300" />
  <meta property="og:site_name" content="Limdek" />
  <meta name="msapplication-TileColor" content="rgb(16, 48, 55)" />
  <meta name="theme-color" content="rgb(16, 48, 55)" />

  <?php include 'elements/estilos.php' ?>


  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <title>Limdek</title>
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

    <div class="pb"></div>
    <div class="topbar">
      <div class="steps">
        <div class="step">
          <a href="carrito.php">Carrito</a>
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="step">
          <a href="informacion.php">Información</a>
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="step active">
          <p>Pago</p>
        </div>
      </div>
    </div>

    <section id="process">

      <div class="container">
        <div class="left">
          <div class="buying__cart">
            <div class="top">
              <h3>Información</h3>
            </div>
            <div class="customer__info">
              <p class="customer__name">
                <strong>Nombre de la persona</strong>
              </p>
              <p class="customer__phone">Teléfono</p>
              <p class="customer__email">Email</p>
              <a href="">Cambiar</a>
            </div>
          </div>

          <div class="buying__cart">
            <div class="top">
              <h3>Envío</h3>
            </div>
            <div class="customer__info">
              <p class="customer__address">Dirección</p>
              <p class="customer__colonia">Colonia</p>
              <p class="customer__postal-code">Código postal</p>
              <p class="customer__city--state">Estado, Municipio</p>
              <a href="">Cambiar</a>
            </div>
          </div>

          <div class="buying__cart">
            <div class="top">
              <h3>Selecciona método de pago</h3>
            </div>

            <div class="payment">
              <p>En Mercado Pago no es necesario crear una cuenta.</p>
              <form action="">
                <div class="payment__method">
                  <div class="option">
                    <input type="radio" name="payment" id="mercado" />
                    <label for="mercado">Mercado Pago</label>
                  </div>
                  <div class="logos">
                    <figure><img src="img/mercado.png" alt="" /></figure>
                    <figure><img src="img/visa.png" alt="" /></figure>
                    <figure><img src="img/master.png" alt="" /></figure>
                    <figure><img src="img/amex.png" alt="" /></figure>
                  </div>
                </div>
                <div class="payment__method">
                  <div class="option">
                    <input type="radio" name="payment" id="paypal" />
                    <label for="paypal">Paypal</label>
                  </div>
                  <div class="logos">
                    <figure><img src="img/paypal.png" alt=""></figure>
                  </div>
                </div>
              </form>
            </div>

            <div class="bottom">
              <a href="informacion.php" class="back"><i class="fas fa-chevron-left"></i>Volver a información</a>
            </div>

          </div>

        </div>

        <div class="right">
          <div class="cart__total">
            <h2>Total del carrito</h2>

            <div class="cart__products">
              <div class="cart__products--product">
                <figure><img src="img/lambrin-interior.png" alt=""></figure>
                <div class="cart__product--description">
                  <h4>Lambrin WPC Interior Color Avellana Fondo Negro</h4>
                </div>
                <p>$0.00 MXN</p>
              </div>
            </div>

            <div class="subtotal">
              <p>Subtotal</p>
              <p class="subtotal__amount">$ 0.00 MXN</p>
            </div>
            <div class="gastos__envio">
              <p>Calculando gastos de envío</p>
              <p class="subtotal__amount">$ 0.00 MXN</p>
            </div>
            <div class="total">
              <h3>Total</h3>
              <p class="total__amount">$ 0.00 MXN</p>
            </div>
            <a href="confirmacion-pago.php" class="button__black">Comprar ahora</a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include 'elements/footer.php' ?>

</body>
<script src="js/script.js"></script>
<script src="js/cartModal.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/loader.js"></script>
<script src="js/adder.js"></script>

</html>