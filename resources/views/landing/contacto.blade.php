@extends('layouts.main')

@section('content')
@use('App\Models\LadingPageConfig')
@php
$instance = LadingPageConfig::getInstance();
@endphp

<main class="main-contact">
    @include('landing._contact_form')
</main>

@endsection