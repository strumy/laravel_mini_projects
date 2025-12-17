<!DOCTYPE html>
<html data-bs-theme="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#712cf9">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="d-flex flex-column">
        <header>
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/home') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <header>
            @if (Route::has('login'))
            <nav class="navbar navbar-expand-md fixed-top" style="background-color: #9ab1c0;" data-bs-theme="light">
                <div class="container-fluid"> 
                    <a class="navbar-brand" href="#">Localized Time</a> <button
                        class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span
                            class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        @auth
                            <li class="nav-item">
                                <a
                                    href="{{ url('/home') }}"
                                    aria-current="page"
                                    class="nav-link active"
                                >
                                    Dashboard
                                </a>
                            </li>
                            @else
                            <li class="nav-item">
                                <a
                                    href="{{ url('/login') }}"
                                    aria-current="page"
                                    class="nav-link"
                                >
                                    Login
                                </a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a
                                    href="{{ url('/register') }}"
                                    aria-current="page"
                                    class="nav-link"
                                >
                                    Register
                                </a>
                            </li>
                            @endif
                        @endauth
                        </ul>
                        <form class="d-flex" role="search"> <input class="form-control me-2" name="searchitem" type="search"
                                placeholder="Search" aria-label="Search"> <button class="btn btn-outline-success"
                                type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
            @endif
        </header> <!-- Begin page content -->
        <main class="flex-shrink-0">
            <div class="container">
                <h1 class="mt-5 text-center">Welcome to Laravel Project for Localized Time</h1>
            </div>
        </main>
        <footer class="footer mt-auto py-3 bg-body-tertiary text-center">
            <div class="container"> <span class="text-body-secondary">Copyright (c) Syeda Tasneem Rumy (syedatasneemrumy@gmail.com)</span> </div>
        </footer>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
