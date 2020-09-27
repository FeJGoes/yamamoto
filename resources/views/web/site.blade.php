<!DOCTYPE html>
<html lang="pt-BR">
@include('web.layout.head')

<body>
    @include('web.layout.header')

    @yield('content')

    @include('web.layout.footer')
    @stack('scripts')
</body>
</html>

