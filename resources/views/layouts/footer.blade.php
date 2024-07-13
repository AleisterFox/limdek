@use('App\Models\LadingPageConfig')
@php
$instance = LadingPageConfig::getInstance();
@endphp
<footer>
  <div class="top">
    <figure>
      <img src="./img/logo-white.png" alt="">
    </figure>

    <div class="tienda">
      <h4>Tienda</h4>

      <div class="horario">
        <h4>Horario de atención</h4>
        <p>Lunes a Viernes:</p>
        <p>10:00 am a 7:00 pm</p>
        <p>Sábado: 10:00 am a 2:00 am</p>
      </div>

      <div class="direccion">
        <h4>Dirección</h4>
        <p>{{ $instance->contact_address }}</p>
      </div>

    </div>
    <div class="enlaces">
      <h4>Enlaces</h4>
      <ul>
        <li><a href="">Piso SPC</a></li>
        <li><a href="">WPC Interior</a></li>
        <li><a href="">WPC Exterior</a></li>
        <li><a href="">PVC Mármol</a></li>
        <li><a href="">Material PU</a></li>
        <li><a href="">Lámparas de Corrugado</a></li>
        <li><a href="">Macetas</a></li>
        <li><a href="">Blog</a></li>
        <li><a href="">Contacto</a></li>
        <li><a href="">Nosotros</a></li>
        <li><a href="">Política de devoluciones</a></li>
        <li><a href="">Política de envíos</a></li>
      </ul>
    </div>
    <div class="empresa">
      <h4>Empresa</h4>
      <p>Empresa dedicados a la especialización en la venta de productos WPC y otros materiales para la decoración y construcción. Ofrecemos una amplia gama de opciones de alta calidad a nuestros clientes para ayudarles a transformar sus espacios en algo hermoso y funcional.</p>
    </div>
  </div>
  <div class="middle">
    <div class="socials">
      <a href="{{ $instance->contact_facebook }}" target="__blank"><i class="fab fa-facebook"></i></a>
      <a href="{{ $instance->contact_instagram }}" target="__blank"><i class="fab fa-instagram"></i></a>
      <a href="{{ $instance->contact_tiktok }}" target="__blank"><i class="fab fa-tiktok"></i></a>
    </div>
  </div>
  <div class="bottom">
    <p>2024&copy; TODOS LOS DERECHOS RESERVADOS <img src="./img/Icono_molcajete.png" alt=""></p>
  </div>
</footer>