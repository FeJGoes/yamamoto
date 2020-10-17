<!DOCTYPE html>
<html lang="pt-BR">
@include('web.includes.head')

<body>
    @include('web.includes.header')

    @yield('content')

    @include('web.includes.footer')
    @stack('scripts')
</body>
</html>

