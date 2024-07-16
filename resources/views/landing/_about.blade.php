@use('App\Models\LadingPageConfig')

@php
    $instance = LadingPageConfig::getInstance();
@endphp

<section id="features">
    <div class="container">
        <div class="feature">
            <span><img src="/img/envios-icon.png" alt=""></span>
            <h4>{{ $instance->card_title_1 }}</h4>
            <p>{{ $instance->card_text_1 }}</p>
        </div>
        <div class="feature">
            <span><img src="/img/servicio-icon.png" alt=""></span>
            <h4>{{ $instance->card_title_2 }}</h4>
            <p>{{ $instance->card_text_2 }}</p>
        </div>
        <div class="feature">
            <span><img src="/img/ubicación-icon.png" alt=""></span>
            <h4>{{ $instance->card_title_3 }}</h4>
            <p>{{ $instance->card_text_3 }}</p>
        </div>
        <div class="feature">
            <span><img src="/img/pagoseguro-icon.png" alt=""></span>
            <h4>{{ $instance->card_title_4 }}</h4>
            <p>{{ $instance->card_text_4 }}</p>
        </div>
    </div>
</section>