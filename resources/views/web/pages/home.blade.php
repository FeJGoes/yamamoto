@extends('web.index')

@section('title', 'Bem vindo! - Thiago Yamamoto')

@section('content')

    @include('web.components.slideshow')

    <div class="ty-between-section-title">
        <h6>Novos caminhos</h6>
        <h3>#RespeitoPorVocê</h3>
    </div>
    @include('web.components.three-boxes-area')

    <div class="ty-between-section-title">
        <h6>Breve biografia</h6>
        <h3>Sobre mim</h3>
    </div>
    @include('web.components.about-area')

    <div class="ty-between-section-title">
        <h6>Entenda mais</h6>
        <h3>Os 3 Poderes</h3>
    </div>
    @include('web.components.faq-area')

    <div class="ty-between-section-title">
        <h6>Acompanhe o canal no youtube</h6>
        <h3>Vídeos</h3>
    </div>
    @include('web.components.cards-area')

    {{-- <div class="ty-between-section-title">
        <h6>Tragetória</h6>
        <h3>O caminho trilhado</h3>
    </div>
    @include('web.components.timeline-area') --}}

@endsection
