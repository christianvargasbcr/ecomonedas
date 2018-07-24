<!DOCTYPE html>
<html>
    <head>
        @include('partials.head')
    </head>
    <body style="background-color: #e0f2f1">
        <header>
            @include('partials.header')
        </header>
        <div class="container">
            @yield('contenido')
        </div>
        <footer>
            @include('partials.footer')
        </footer>
    </body>
</html>