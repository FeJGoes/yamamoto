@extends('web.index')

@section('title', 'Bem vindo! - Thiago Yamamoto')

@section('content')

@include('web.components.video-background')

<div id="sobre-mim-biografia" class="ty-between-section-title">
  <h6>Sobre mim</h6>
  <h3>Breve biografia</h3>
</div>
@include('web.components.about-area')

{{-- <div class="ty-between-section-title">
  <h6>Sobre mim</h6>
  <h3>Minha história contada por outras pessoas</h3>
</div>
@include('web.components.slider-area')

<div id="o-que-defendo" class="ty-between-section-title">
  <h6>#RespeitoPorVocê</h6>
  <h3>O que defendo</h3>
</div>
@include('web.components.o-que-defendo') --}}

<div id="entenda-mais" class="ty-between-section-title">
  <h6>Entenda mais</h6>
  <h3>Dinâmica política</h3>
</div>
@include('web.components.tres-poderes')

{{-- <div id="acompanhe-videos" class="ty-between-section-title">
  <h6>Acompanhe o canal no youtube</h6>
  <h3>Vídeos</h3>
</div>
@include('web.components.cards-area') --}}

{{-- <div class="ty-between-section-title">
        <h6>Tragetória</h6>
        <h3>O caminho trilhado</h3>
    </div> --}}
{{-- @include('web.components.timeline-area') --}}



@endsection
