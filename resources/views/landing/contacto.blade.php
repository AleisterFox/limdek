@extends('layouts.main')

@section('content')
@use('App\Models\LadingPageConfig')
@php
$instance = LadingPageConfig::getInstance();
@endphp

<main class="main-contact">

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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.911810658996!2d-117.6592853!3d33.6594469!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dce9ec4381a4d5%3A0x69285c7c898ba440!2s26985%20Brighton%20Ln%2C%20Lake%20Forest%2C%20CA%2092630%2C%20EE.%20UU.!5e0!3m2!1ses-419!2smx!4v1716913264922!5m2!1ses-419!2smx" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
</main>

@endsection