<nav class="navbar navbar-expand-md fixed-top" style="background-color: #9ab1c0;" data-bs-theme="light">
    <div class="container-fluid"> 
        <a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a>
        
        <button
            class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span
                class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
                @guest
                    <li class="nav-item">
                        <a
                            href="{{ url('/') }}"
                            aria-current="page"
                            class="nav-link active"
                        >
                            Home
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a
                            href="{{ url('/home') }}"
                            aria-current="page"
                            class="nav-link active"
                        >
                            Dashboard
                        </a>
                    <li class="nav-item">
                        <div class="mt-2">{{ LangCountry::emojiFlag() }} {{ LangCountry::withTime()->dateWordsWithDay(now()) }}</div>
                    </li>
                @endguest
            </ul>
            <ul class="navbar-nav ms-auto">
            
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" aria-current="page">
                            {{ __('Login') }}
                        </a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}" aria-current="page">
                            {{ __('Register') }}
                        </a>
                    </li>
                @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
            @endguest
            <form class="d-flex" role="search"> <input class="form-control me-2" name="searchitem" type="search"
                    placeholder="Search" aria-label="Search"> <button class="btn btn-outline-success"
                    type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>