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
                @php
                    $links = [
                        'Characters' => '/character',
                        'Items' => '/item',
                        'Your Vault' => '/vault',
                        'Encounter' => '/encounter',
                    ];
                @endphp
                @foreach ($links as $link => $href)
                    <li class="">
                        <a href="{{ $href }}" aria-current="page">{{ $link }}</a>
                    </li>
                @endforeach
            </ul>
            <!-- /.header-links -->
        </div>
        <!-- /.header-middle -->
        <div class="header-right">
            <form action="" method="get">
                <input type="search" name="" id="" class="search-text">
                <button type="submit" class="search-button">Search</button>
            </form>
        </div>
        <!-- /.header-right -->

    </div>
    <!-- /.container-header -->
</header>
<!-- /.site-header -->
