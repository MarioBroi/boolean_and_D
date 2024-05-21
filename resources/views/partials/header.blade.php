<header class="site-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a href="{{ route('home') }}">
                <img src={{ url('assets\img\header\icon.png') }} alt="Boolean and Dragons Logo" class="logo">
            </a>
            <!-- /.logo -->

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link fs-4 header-text" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-4 link-underline-opacity-75-hover header-text"
                            href="{{ route('admin.characters.index') }}">{{ __('Character') }}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fs-4 link-underline-opacity-75-hover header-text"
                            href="{{ route('admin.items.index') }}">{{ __('Items') }}</a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav ml-auto flex-row gap-2">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link fs-4 header-text" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link fs-4 header-text" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class=" fs-4 dropdown-toggle header-text" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"
                            data-bs-theme="dark">
                            <a class="dropdown-item header-text fs-4" href="{{ url('admin') }}">{{ __('Dashboard') }}</a>
                            <a class="dropdown-item header-text fs-4" href="{{ url('profile') }}">{{ __('Profile') }}</a>
                            <a class="dropdown-item header-text fs-4" href="{{ route('logout') }}"
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
        </nav>
        <!-- Right Side Of Navbar -->
















        <!-- /.header-right -->

    </div>
    <!-- /.container-header -->
</header>
<!-- /.site-header -->
