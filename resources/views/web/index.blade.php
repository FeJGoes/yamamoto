<!DOCTYPE html>
<html lang="pt-BR">
    @include('web.includes.head')

    <body>
        @include('web.includes.header')

        @yield('content')

        {{-- MODAIS DOS ARTIGOS --}}
        @include('web.components.modais-artigos')

        @include('web.includes.footer')
        @stack('scripts')
    </body>
</html>

