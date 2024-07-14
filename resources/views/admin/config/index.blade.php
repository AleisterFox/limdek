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
                    <label for="">Teléfono</label>
                    <input type="text" class="form-control" name="contact_phone" id="phone" form="contactForm" value="{{ $instance->contact_phone }}">
                </td>
                <td>
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="contact_email" id="email" form="contactForm" value="{{ $instance->contact_email }}">
                </td>
                <td>
                    <label for="">Facebook</label>
                    <input type="text" class="form-control" name="contact_facebook" form="contactForm" value="{{ $instance->contact_facebook }}">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Instagram</label>
                    <input type="text" class="form-control" name="contact_instagram" form="contactForm" value="{{ $instance->contact_instagram }}">
                </td>
                <td>
                    <label for="">Tiktok</label>
                    <input type="text" class="form-control" name="contact_tiktok" form="contactForm" value="{{ $instance->contact_tiktok }}">
                </td>
                <td>
                    <label for="">Dirección</label>
                    <input type="text" class="form-control" name="contact_address" form="contactForm" value="{{ $instance->contact_address }}">
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

        CKEDITOR.instances.faq.on('instanceReady', function() {
            if ($(".cke_notification_close").length > 0)
                $(".cke_notification_close")[0].click();

            CKEDITOR.instances.faq.setData(`{!! $instance->faq !!}`);
        });
    });
</script>
@endpush