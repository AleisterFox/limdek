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
    CKEDITOR.replace('content-area');
</script>
@endpush