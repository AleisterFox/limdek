@use('App\Services\CartService')
<header>
  <nav>
    <a href="/">
      <picture>
        <source media="(max-width: 768px)" srcset="/img/icono.png" />
        <img loading="lazy" src="/img/logo.png" alt="" />
      </picture>
    </a>

    <ul class="menu">
      <li><a href="/">Inicio</a></li>
      <li><a href="/productos">Productos</a></li>
      <li><a href="/nosotros">Nosotros</a></li>
      <!-- <li><a href="index.php#servicios">Servicios</a></li>
      <li><a href="index.php#faqs">Faqs</a></li> -->
      <li><a href="/contacto">Contacto</a></li>
      @if (false)
      <li class="search">
        <a href="javascript:void(0)"><i class="fas fa-magnifying-glass"></i></a>
        <form action="">
          <input type="text" name="" id="">
        </form>
      </li>
      @endif
      <li class="profile">
        <a href="javascript:void(0)"><i class="fas fa-user"></i></a>
        <ul class="profile-menu">
          <li><a href="/login">Iniciar sesión</a></li>
          <li><a href="/register">Registrarse</a></li>
        </ul>
      </li>
      <li class="shop-cart">
        <a href="/carrito"><i class="fas fa-cart-shopping"></i></a>
        <p class="number__of--articles">{{ CartService::getCount() }}</p>
      </li>
    </ul>
    <a class="bars"><i class="fa-solid fa-bars menu__button"></i></a>
    <ul class="menu2">
      <li class="shop-cart2">
        <a href="/carrito"><i class="fas fa-cart-shopping"></i></a>
        <p class="number__of--articles">{{ CartService::getCount() }}</p>
      </li>
      <li class="profile2">
        <a href="javascript:void(0)"><i class="fas fa-user"></i></a>
        <ul class="profile-menu2">
          <li><a href="/login">Iniciar sesión</a></li>
          <li><a href="/register">Registrarse</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</header>