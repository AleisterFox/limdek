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
    <h2>Página nosotros</h2>
    <form action="{{ route('about.update', ['about' => $instance->id]) }}" method="post" enctype="multipart/form-data" id="contactForm">
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
                    <div class="row">
                        <label for="">Imagen de banner</label>
                        <div class="col-sm-8">
                            <input type="file" class="form-control" name="about_image" id="email" form="contactForm" value="{{ $instance->about_image }}">
                        </div>
                        <div class="col-sm-4">
                            @if ($instance->about_image)
                            <img src="{{ asset('images/' . $instance->about_image) }}" alt="" style="width: 60px">
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="row mt-3">
                        <div class="col-sm-6">
                            <label for="adoption_banner_button_text_1">Imagen(Derecha)</label>
                            <input type="file" class="form-control" name="about_image_1" form="contactForm">
                            @if ($instance->about_image_1)
                            <img src="{{ asset('images/' . $instance->about_image_1) }}" alt="" style="width: 100px">
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label for="adoption_banner_button_text_1">Imagen(Izquierda)</label>
                            <input type="file" class="form-control" name="about_image_2" form="contactForm">
                            @if ($instance->about_image_2)
                            <img src="{{ asset('images/' . $instance->about_image_2) }}" alt="" style="width: 100px">
                            @endif
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div class="mt-3">
                        <label for="about_text_1">Descripción(Izq)</label>
                        <textarea name="about_text_1" id="about_text_1" class="form-control" form="contactForm"></textarea>
                    </div>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    <div class="mt-3">
                        <label for="about_text_2">Descripción(Derecha)</label>
                        <textarea name="about_text_2" id="about_text_2" class="form-control" form="contactForm"></textarea>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
    $(document).ready(function() {
        CKEDITOR.replace('about_text_1');
        CKEDITOR.replace('about_text_2');

        CKEDITOR.instances.about_text_1.on('instanceReady', function() {
            if ($(".cke_notification_close").length > 0)
                $(".cke_notification_close")[0].click();

            CKEDITOR.instances.about_text_1.setData(`{!! $instance->about_text_1 !!}`);
        });

        CKEDITOR.instances.about_text_2.on('instanceReady', function() {
            if ($(".cke_notification_close").length > 1)
                $(".cke_notification_close")[1].click();

            CKEDITOR.instances.about_text_2.setData(`{!! $instance->about_text_2 !!}`);
        });
    });
</script>
@endpush