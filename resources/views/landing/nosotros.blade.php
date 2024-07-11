@extends('layouts.main')

@section('content')
<main>
    <section id="productos-hero">
        <figure class="portada"><img loading="lazy" src="img/portada.jpg" alt=""></figure>
    </section>

    <section id="us">
        <div class="top">
            <figure>
                <img src="img/durabilidad.png" alt="">
            </figure>

            <div class="text">
                <h2>Lorem, ipsum dolor.</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat non expedita labore omnis libero adipisci ut culpa et sequi eveniet voluptatum, cupiditate aliquam doloribus dolorum distinctio quibusdam laboriosam aut reiciendis!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas animi, modi aut omnis cumque at a reiciendis beatae reprehenderit maiores ullam expedita doloremque minus alias error facere, dignissimos molestiae atque?</p>
            </div>
        </div>
        <div class="bottom">
            <div class="text">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis illum optio similique accusamus magnam, in aliquid quibusdam, saepe fugiat veritatis modi dolorum laudantium. Saepe dolor numquam laborum quis debitis delectus?</p>
            </div>
            <figure>
                <img src="img/durabilidad.png" alt="">
            </figure>
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

    <section id="contacto">
        <div class="container">
            <div class="left">
                <h2>¿Tienes alguna
                    pregunta?</h2>
                <p>Llena el siguiente formulario para ponerte en contacto con nuestro equipo y en breve estaremos respondiendo tu solicitud:</p>

                <form action="">
                    <input type="text" name="name" id="name" placeholder="Nombre" required>
                    <input type="tel" name="whatsapp" id="whatsapp" placeholder="Whatsapp" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="text" name="city" id="city" placeholder="Ciudad">
                    <textarea name="message" id="message" placeholder="Mensaje"></textarea>
                    <button type="submit" class="button__secondary">Enviar mensaje</button>
                </form>
            </div>
            <div class="right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.911810658996!2d-117.6592853!3d33.6594469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dce9ec4381a4d5%3A0x69285c7c898ba440!2s26985%20Brighton%20Ln%2C%20Lake%20Forest%2C%20CA%2092630%2C%20EE.%20UU.!5e0!3m2!1ses-419!2smx!4v1716913264922!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
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
</script>
@endpush