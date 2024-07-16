@use('App\Models\LadingPageConfig')

@php
    $instance = LadingPageConfig::getInstance();
@endphp
<section id="contacto">
    <div class="container">
        <div class="left">
            <h2>¿Tienes alguna pregunta?</h2>
            <p>Llena el siguiente formulario para ponerte en contacto con nuestro equipo y en breve estaremos respondiendo tu solicitud:</p>
            @session('message')
                @include('layouts._alert', ['message' => $value])
            @endsession
            <form action="{{ route('contacto.store') }}" method="post">
                @csrf
                <input type="text" name="name" id="name" placeholder="Nombre" required>
                <input type="tel" name="phone" id="whatsapp" placeholder="Whatsapp" required>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="text" name="city" id="city" placeholder="Ciudad">
                <textarea name="message" id="message" placeholder="Mensaje"></textarea>
                <button type="submit" class="button__secondary">Enviar mensaje</button>
            </form>
        </div>
        <div class="right">
            @if ($instance->contact_latitude && $instance->contact_longitude)
            <iframe 
                src="http://maps.google.com/maps?q={{ $instance->contact_latitude }},{{ $instance->contact_longitude }}&z=16&output=embed" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            @endif
        </div>
    </div>
</section>