@extends('web.index')

@section('title', 'Bem vindo! - Thiago Yamamoto')

@section('content')

    @include('web.components.slideshow')

    @include('web.components.three-boxes-area')

    @include('web.components.about-area')

    @include('web.components.faq-area')

    @include('web.components.cards-area')

    {{-- @include('web.components.timeline-area') --}}

@endsection
