@extends('layouts.main')

@section('content')
@use('App\Models\LadingPageConfig')
@php
$instance = LadingPageConfig::getInstance();
@endphp
<main>
    <section id="productos-hero">
        <figure class="portada">
            @if ($instance->about_image)
            <img loading="lazy" src="{{ asset('images/' . $instance->about_image) }}" alt="">
            @else
            <img loading="lazy" src="img/portada.jpg" alt="">
            @endif
        </figure>
    </section>

    <section id="us">
        <div class="top">
            <figure>
                @if ($instance->about_image_1)
                <img loading="lazy" src="{{ asset('images/' . $instance->about_image_1) }}" alt="">
                @else
                <img src="img/durabilidad.png" alt="">
                @endif
            </figure>

            <div class="text" style="font-size: 2rem; font-weight: 400;">
                {!! $instance->about_text_1 !!}
            </div>
        </div>
        <div class="bottom">
            <div class="text" style="font-size: 2rem; font-weight: 400;">
                {!! $instance->about_text_2 !!}
            </div>
            <figure>
                @if ($instance->about_image_2)
                <img loading="lazy" src="{{ asset('images/' . $instance->about_image_2) }}" alt="">
                @else
                <img src="img/durabilidad.png" alt="">
                @endif
            </figure>
        </div>
    </section>

    @include('landing._about')

    @include('landing._contact_form')
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