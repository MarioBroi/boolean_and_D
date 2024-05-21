<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">

    <header class="site-header">
        <div class="container-header">
            <div class="header-left">
                <a href="{{ route('home') }}">
                    <img src="https://static-00.iconduck.com/assets.00/dungeons-and-dragons-icon-512x492-vw90341y.png"
                        alt="Boolean and Dragons Logo" class="logo">
                </a>
            </div>
            <!-- /.header-left -->
            <div class="header-middle">

                <ul class="header-links">
                    <li>
                        <a class="navbar-brand" href="{{ route('home') }}">Home</a>
                    </li>
                </ul>
                <!-- /.header-links -->
            </div>
            <!-- /.header-middle -->
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto flex-row gap-2">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('admin') }}">{{ __('Dashboard') }}</a>
                            <a class="dropdown-item" href="{{ url('profile') }}">{{ __('Profile') }}</a>
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
            </ul>

            <!-- /.header-right -->

        </div>
        <!-- /.container-header -->
    </header>
    <!-- /.site-header -->




    <main>


        @yield('content')

    </main>
</body>

</html>
