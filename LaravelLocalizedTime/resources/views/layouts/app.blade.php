<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('./components.head')
    </head>
    <body class="d-flex flex-column">
        <div id="app">
            <header>
                @include('./components.header')
            </header>
            <main class="flex-shrink-0 py-4">
                @yield('content')
            </main>
            <footer class="footer mt-auto py-3 bg-body-tertiary text-center">
                @include('./components/footer')
            </footer>
        </div>
    </body>
</html>
