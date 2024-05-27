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

    <div class="pb"></div>
    <div class="topbar">
      <div class="steps">
        <div class="step">
          <a href="carrito.php">Carrito</a>
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="step active">
          <p>Información</p>
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="step">
          <p>Envío</p>
          <i class="fas fa-chevron-right"></i>
        </div>
        <div class="step">
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
              <form action="">
                <input type="text" name="name" id="name" placeholder="Nombre y Apellido*" required />
                <input type="tel" name="phone" id="phone" placeholder="Teléfono*" required />
                <input type="email" name="email" id="email" placeholder="Email*" required />
                <div class="store-data">
                  <input type="checkbox" name="store-data" id="store-data">
                  <label for="store-data">Permito guardar mis datos de forma segura para mis siguientes pedidos.</label>
                </div>
                <div class="facturacion">
                  <p>¿Desea facturar?</p>
                  <input type="radio" name="facturar" id="facturar">
                  <label for="facturar">Si</label>
                  <input type="radio" name="facturar" id="no_facturar">
                  <label for="no_facturar">No</label>
                </div>
                <input type="file" name="csf" id="csf" class="inputfile" data-multiple-caption="{count} files selected" multiple>
                <label for="csf">Constancia de Situación Fiscal <span><i class="fas fa-upload"></i></span></label>

                <label for="uso" class="uso-cfdi">Uso de CFDI</label>
                <select name="uso" id="uso">
                  <option value="">Seleccione</option>
                  <option value="">1</option>
                  <option value="">2</option>
                  <option value="">3</option>
                  <option value="">4</option>
                </select>
              </form>
            </div>

            <div class="bottom">
              <a href="carrito.php" class="back"><i class="fas fa-chevron-left"></i>Volver a carrito</a>
              <a href="envio.php" class="button">Continuar</a>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="cart__total">
            <h2>Total del carrito</h2>

            <div class="cart__products">
              <div class="cart__products--product">
                <figure><img src="img/estereo.png" alt=""></figure>
                <div class="cart__product--description">
                  <h4>Microscopio Educativo</h4>
                  <p>Óptica Plan Acromática <br>
                    Oculares 10x/20 Objetivos 4x, 10x, 40x y 100x oil <br>
                    Iluminación fija Koehler y de tipo LED <br>
                    Técnicas de iluminación: BF y DF</p>
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
          </div>
        </div>
      </div>
    </section>

  </main>

  <?php include 'elements/footer.php' ?>

</body>
<script src="js/script.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="js/loader.js"></script>
<script src="js/adder.js"></script>

<!-- <script>
  const estadosMexicanos = [
    "Aguascalientes",
    "Baja California",
    "Baja California Sur",
    "Campeche",
    "Chiapas",
    "Chihuahua",
    "Coahuila",
    "Colima",
    "Ciudad de México",
    "Durango",
    "Guanajuato",
    "Guerrero",
    "Hidalgo",
    "Jalisco",
    "Estado de México",
    "Michoacán",
    "Morelos",
    "Nayarit",
    "Nuevo León",
    "Oaxaca",
    "Puebla",
    "Querétaro",
    "Quintana Roo",
    "San Luis Potosí",
    "Sinaloa",
    "Sonora",
    "Tabasco",
    "Tamaulipas",
    "Tlaxcala",
    "Veracruz",
    "Yucatán",
    "Zacatecas",
  ];

  const select = document.getElementById("state");

  estadosMexicanos.forEach((estadoMexicano, index) => {
    const option = document.createElement("option");
    option.text = estadoMexicano;
    option.value = index + 1;
    select.add(option);
  });
</script> -->


<script>
  const inputs = document.querySelectorAll('.inputfile');
  inputs.forEach(input => {
    let label = input.nextElementSibling;


    label.addEventListener('dragover', (e) => {
      e.preventDefault();
      label.classList.add('dragover');
    });

    label.addEventListener('dragleave', () => {
      label.classList.remove('dragover');
    });


    label.addEventListener('drop', (e) => {
      e.preventDefault();
      label.classList.remove('dragover');

      let file = e.dataTransfer.files[0];
      input.files = e.dataTransfer.files;

      if (file) {
        label.innerHTML = file.name;
      } else {
        label.innerHTML = 'Constancia de Situación Fiscal';
      }

    });



    input.addEventListener('change', function(e) {
      let fileName = this.files[0].name;

      if (fileName)
        label.innerHTML = fileName;
      else
        label.innerHTML = 'Constancia de Situación Fiscal';
    });
  });
</script>


</html>