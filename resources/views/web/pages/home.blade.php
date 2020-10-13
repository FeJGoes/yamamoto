@extends('web.index')

@section('title', 'Bem vindo! - Thiago Yamamoto')

@section('content')
{{-- <div class="uk-position-relative uk-visible-toggle uk-light uk-margin-bottom" tabindex="-1" uk-slideshow="min-height: 300; max-height: 600; animation: push">
    <ul class="uk-slideshow-items">
        <li>
            <img src="{{asset('images/slide1.png')}}" alt="" uk-cover>
        </li>
        <li>
            <img src="{{asset('images/slide2.png')}}" alt="" uk-cover>
        </li>
        <li>
            <img src="{{asset('images/slide1.png')}}" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
</div> --}}

{{-- @include('web.components.three-boxes-area') --}}

{{-- @include('web.components.about-area') --}}

{{-- @include('web.components.faq-area') --}}

@include('web.components.cards-area')

@endsection
