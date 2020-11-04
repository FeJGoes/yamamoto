<!DOCTYPE html>
<html lang="pt-BR">
@include('web.includes.head')

<body>
  @include('web.includes.header')

  @yield('content')

  {{-- MODAIS DOS ARTIGOS --}}
  @include('web.components.modais-artigos')

  <a style="position: fixed; bottom: 25px; right: 25px" href="https://wa.me/5519997579206" target="_blank">
    <img width="35" height="35" src="{{asset('images/whatsapp.png')}}" alt="whats">
  </a>
  @include('web.includes.footer')
  @stack('scripts')
</body>

</html>
