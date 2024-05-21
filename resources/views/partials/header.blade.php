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

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.characters.index') }}">{{ __('Character') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.items.index') }}">{{ __('Items') }}</a>
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
