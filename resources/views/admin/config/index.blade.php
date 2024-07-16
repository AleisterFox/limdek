@extends('layouts.app')

@push('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endpush

@section('content')
@use('App\Models\LadingPageConfig')
@php
$instance = LadingPageConfig::getInstance();
@endphp

<div id="content" class="row mt-5 mb-5">
    <h2>Formulario de contacto</h2>
    <form action="{{ route('config.update', ['config' => $instance->id]) }}" method="post" enctype="multipart/form-data" id="contactForm">
        @csrf
        @method('patch')
    </form>
    <button class="btn btn-primary mt-5 mb-5" form="contactForm">Guardar</button>
    <table clss="table table-striped" style="width:100%">
        <thead>
            <tr>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <label>Teléfono</label>
                    <input type="text" class="form-control" name="contact_phone" id="phone" form="contactForm" value="{{ $instance->contact_phone }}">
                </td>
                <td>
                    <label>Email</label>
                    <input type="text" class="form-control" name="contact_email" id="email" form="contactForm" value="{{ $instance->contact_email }}">
                </td>
                <td>
                    <label>Facebook</label>
                    <input type="text" class="form-control" name="contact_facebook" form="contactForm" value="{{ $instance->contact_facebook }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Instagram</label>
                    <input type="text" class="form-control" name="contact_instagram" form="contactForm" value="{{ $instance->contact_instagram }}">
                </td>
                <td>
                    <label>Tiktok</label>
                    <input type="text" class="form-control" name="contact_tiktok" form="contactForm" value="{{ $instance->contact_tiktok }}">
                </td>
                <td>
                    <label>Dirección</label>
                    <input type="text" class="form-control" name="contact_address" form="contactForm" value="{{ $instance->contact_address }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Coordenada Latitude</label>
                    <input type="text" class="form-control" name="contact_latitude" form="contactForm" value="{{ $instance->contact_latitude }}">
                </td>
                <td>
                    <label>Coordenada Longitude</label>
                    <input type="text" class="form-control" name="contact_longitude" form="contactForm" value="{{ $instance->contact_longitude }}">
                </td>
            </tr>
        </tbody>
    </table>

    <h2 class="mt-4">Configuración tarjetas</h2>
    <table class="table">
        <thead></thead>
        <tbody>
            <tr>
                <td>
                    <div class="row">
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="card_title_1" id="card_title_1" form="contactForm" value="{{ $instance->card_title_1 }}">
                            <input type="text" class="form-control" name="card_text_1" id="card_text_1" form="contactForm" value="{{ $instance->card_text_1 }}">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="card_title_2" id="card_title_2" form="contactForm" value="{{ $instance->card_title_2 }}">
                            <input type="text" class="form-control" name="card_text_2" id="card_text_2" form="contactForm" value="{{ $instance->card_text_2 }}">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="card_title_3" id="card_title_3" form="contactForm" value="{{ $instance->card_title_3 }}">
                            <input type="text" class="form-control" name="card_text_3" id="card_text_3" form="contactForm" value="{{ $instance->card_text_3 }}">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name="card_title_4" id="card_title_4" form="contactForm" value="{{ $instance->card_title_4 }}">
                            <input type="text" class="form-control" name="card_text_4" id="card_text_4" form="contactForm" value="{{ $instance->card_text_4 }}">
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <h2 class="mt-4">Apartado: Beneficios Materiales WPC</h2>
    <table class="table">
        <thead></thead>
        <tbody>
            <tr>
                <td>
                    <div class="row">
                        <label>Imagen de banner 1</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="banner_image_1" id="email" form="contactForm" value="{{ $instance->banner_image_1 }}">
                        </div>
                        <div class="col-sm-4">
                            @if ($instance->banner_image_1)
                            <img src="{{ asset('images/' . $instance->banner_image_1) }}" alt="" style="width: 60px">
                            @endif
                        </div>
                        <div class="col-sm-12">
                            <label for="adoption_banner_button_text_1">Texto imagen</label>
                            <textarea name="banner_text_1" id="banner_text_1" class="form-control" form="contactForm"></textarea>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <label>Imagen de banner 2</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="banner_image_2" id="email" form="contactForm" value="{{ $instance->banner_image_2 }}">
                        </div>
                        <div class="col-sm-4">
                            @if ($instance->banner_image_2)
                            <img src="{{ asset('images/' . $instance->banner_image_2) }}" alt="" style="width: 60px">
                            @endif
                        </div>
                        <div class="col-sm-12">
                            <label for="adoption_banner_button_text_1">Texto imagen</label>
                            <textarea name="banner_text_2" id="banner_text_2" class="form-control" form="contactForm"></textarea>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <label>Imagen de banner 3</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="banner_image_3" id="email" form="contactForm" value="{{ $instance->banner_image_3 }}">
                        </div>
                        <div class="col-sm-4">
                            @if ($instance->banner_image_3)
                            <img src="{{ asset('images/' . $instance->banner_image_3) }}" alt="" style="width: 60px">
                            @endif
                        </div>
                        <div class="col-sm-12">
                            <label for="adoption_banner_button_text_1">Texto imagen</label>
                            <textarea name="banner_text_3" id="banner_text_3" class="form-control" form="contactForm"></textarea>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="row">
                        <label>Imagen de banner 4</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="banner_image_4" id="email" form="contactForm" value="{{ $instance->banner_image_4 }}">
                        </div>
                        <div class="col-sm-4">
                            @if ($instance->banner_image_4)
                            <img src="{{ asset('images/' . $instance->banner_image_4) }}" alt="" style="width: 60px">
                            @endif
                        </div>
                        <div class="col-sm-12">
                            <label for="adoption_banner_button_text_1">Texto imagen</label>
                            <textarea name="banner_text_4" id="banner_text_4" class="form-control" form="contactForm"></textarea>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <h2 class="mt-4">FAQ</h2>
    <table clss="table table-striped" style="width:100%">
        <thead>
            <tr>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="mt-3">
                        <label for="faq">Descripción(Izq)</label>
                        <textarea name="faq" id="faq" class="form-control" form="contactForm"></textarea>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>

    <h2 class="mt-4">Preguntas</h2>
    <table class="table">
        <thead>
            <th></th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" class="form-control" name="question_1" form="contactForm" value="{{ $instance->question_1 }}">
                    <input type="text" class="form-control" name="answer_1" form="contactForm" value="{{ $instance->answer_1 }}">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" name="question_5" form="contactForm" value="{{ $instance->question_5 }}">
                    <input type="text" class="form-control" name="answer_5" form="contactForm" value="{{ $instance->answer_5 }}">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" name="question_2" form="contactForm" value="{{ $instance->question_2 }}">
                    <input type="text" class="form-control" name="answer_2" form="contactForm" value="{{ $instance->answer_2 }}">
                </td>
            </tr>

            <tr>
                <td>
                    <input type="text" class="form-control" name="question_3" form="contactForm" value="{{ $instance->question_3 }}">
                    <input type="text" class="form-control" name="answer_3" form="contactForm" value="{{ $instance->answer_3 }}">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" class="form-control" name="question_4" form="contactForm" value="{{ $instance->question_4 }}">
                    <input type="text" class="form-control" name="answer_4" form="contactForm" value="{{ $instance->answer_4 }}">
                </td>
            </tr>
        </tbody>
    </table>
</div>
@if (false)
<textarea name="" id="content-area"></textarea>
@endif

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        CKEDITOR.replace('faq');

        CKEDITOR.replace('banner_text_1');
        CKEDITOR.replace('banner_text_2');
        CKEDITOR.replace('banner_text_3');
        CKEDITOR.replace('banner_text_4');

        CKEDITOR.instances.faq.on('instanceReady', function() {
            if ($(".cke_notification_close").length > 0)
                $(".cke_notification_close")[0].click();

            CKEDITOR.instances.faq.setData(`{!! $instance->faq !!}`);
        });

        CKEDITOR.instances.banner_text_1.on('instanceReady', function() {
            if ($(".cke_notification_close").length > 0)
                $(".cke_notification_close")[0].click();

            CKEDITOR.instances.banner_text_1.setData(`{!! $instance->banner_text_1 !!}`);
        });

        CKEDITOR.instances.banner_text_2.on('instanceReady', function() {
            if ($(".cke_notification_close").length > 1)
                $(".cke_notification_close")[1].click();

            CKEDITOR.instances.banner_text_2.setData(`{!! $instance->banner_text_2 !!}`);
        });

        CKEDITOR.instances.banner_text_3.on('instanceReady', function() {
            if ($(".cke_notification_close").length > 2)
                $(".cke_notification_close")[2].click();

            CKEDITOR.instances.banner_text_3.setData(`{!! $instance->banner_text_3 !!}`);
        });

        CKEDITOR.instances.banner_text_4.on('instanceReady', function() {
            if ($(".cke_notification_close").length > 3)
                $(".cke_notification_close")[3].click();

            CKEDITOR.instances.banner_text_4.setData(`{!! $instance->banner_text_4 !!}`);
        });
    });
</script>
@endpush