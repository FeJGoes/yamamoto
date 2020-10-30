@extends('web.index')

@section('title', 'Bem vindo! - Thiago Yamamoto')

@section('content')

    @include('web.components.slideshow')

    <div class="ty-between-section-title">
        <h6>Sobre mim</h6>
        <h3>Breve biografia</h3>
    </div>
    @include('web.components.about-area')

    <div class="ty-between-section-title">
        <h6>Sobre mim</h6>
        <h3>Minha história contada por outras pessoas</h3>
    </div>
    @include('web.components.slider-area')

    <div class="ty-between-section-title">
        <h6>#RespeitoPorVocê</h6>
        <h3>O que defendo</h3>
    </div>
    @include('web.components.three-boxes-area')

    <div class="ty-between-section-title">
        <h6>Entenda mais</h6>
        <h3>Dinâmica política</h3>
    </div>
    @include('web.components.faq-area')

    <div class="ty-between-section-title">
        <h6>Acompanhe o canal no youtube</h6>
        <h3>Vídeos</h3>
    </div>
    @include('web.components.cards-area')

    <div class="ty-between-section-title">
        <h6>Tragetória</h6>
        <h3>O caminho trilhado</h3>
    </div>
    {{-- @include('web.components.timeline-area') --}}

    @include('web.components.articles-modals')

@endsection
