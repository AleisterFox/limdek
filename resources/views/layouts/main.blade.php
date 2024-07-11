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

  @include('layouts.styles')

  <script src="/js/wow.min.js"></script>
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

  @include('layouts.header')

  @yield('content')

  @include('layouts.footer')
</body>

<script src="/js/script.js"></script>
<script src="/js/script2.js"></script>
<script src="/js/cartModal.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="/js/adder.js"></script>
<script src="/js/loader.js"></script>
<script src="/js/glide.min.js"></script>

@stack('scripts')

</html>