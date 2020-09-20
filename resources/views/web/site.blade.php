<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        @include('web.layout.head')
    </head>

    <body>

        <main class="container">
            @yield('content')
        </main>

        @include('web.layout.footer')
    </body>
</html>

