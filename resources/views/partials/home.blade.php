<section class="title title-bg">
    <div class="container">
        <div class="row align-items-center py-5 fs-1">
            <div class="col-8">
                <h1 class="home-text text-center">Boolean & Dragons: Your Portal to Epic Fantasy Roleplaying</h1>
            </div>
            <!-- /.col left -->
            <div class="col-4">
                <p class="home-text py-5 fs-4 fw-bold">
                    Welcome to Boolean & Dragons!
                    Adventure Quest is your ultimate online resource for all things fantasy roleplaying. Dive into a
                    world
                    of
                    adventure, where your imagination is the only limit. Whether you're a seasoned dungeon master or
                    a
                    fresh-faced
                    adventurer, we've got everything you need to create and enjoy unforgettable campaigns.
                </p>
            </div>
            <!-- /.col right-->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.title -->

<section class="start-adventure">
    <div class="container">
        <div class="row p-5">
            <h1 class="start-today text-center">Start Your Adventure Today</h1>
            <p class="fw-bold text-center fs-3 pb-5">
                Design your own unique character with our intuitive character builder. Choose from a variety of
                stats to bring your character to life. Forge the perfect items and dominate the games!
            </p>
            <div class="col-6 p-5 m-auto create-button">
                <a href="{{ route('admin.items.create') }}"
                    class="justify-center align-items-center text-decoration-none text-reset">
                    <img src="{{ url('assets\img\sword-icon.png') }}" alt="dragon image" width="80%">
                    <p class="text-center fs-2 pt-5 fw-bold">
                        Create Your Items Here
                        <i class="fa-solid fa-gavel"></i>
                    </p>
                </a>
            </div>
            <!-- /.col -->
            <div class="col-6 p-5 m-auto create-button">
                <a href="{{ route('admin.characters.create') }}"
                    class="justify-center align-items-center text-decoration-none text-reset">
                    <img src="{{ url('assets\img\dragon-icon.png') }}" alt="dragon image" width="80%">
                    <p class="text-center fs-2 pt-5 fw-bold">
                        Create Your Character Here
                        <i class="fa-solid fa-gavel"></i>
                    </p>
                </a>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>
<!-- /.start-adventure -->

<div class="inside-waves">

    <svg class="wave-1hkxOo wave" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"
        preserveAspectRatio="none">
        <path class="wavePath-haxJK1 animationPaused-2hZ4IO"
            d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z"
            fill="currentColor"></path>
    </svg>

    <div class="back-gradient">

        <div class="container">
            <div class="row text-center home-text py-5">
                <h1 class="fw-bolder py-5">Manage Your Games</h1>
                <p class="fw-bold fs-4">
                    Update character sheets in real-time with our game management tools. No more messy paperwork!
                </p>
                <div>
                    <a href="{{ route('admin.characters.index') }}"
                        class="btn btn-lg border-danger home-text px-5 py-3">
                        Update characters
                    </a>
                </div>
            </div>
            <!-- /.row -->

            <div class="row text-center home-text py-5">
                <p class="fw-bold fs-4">
                    Update items sheets in real-time with our game management tools. No more blunt swords!
                </p>
                <div>
                    <a href="{{ route('admin.items.index') }}" class="btn btn-lg border-danger home-text px-5 py-3">
                        Update items
                    </a>
                </div>
            </div>
            <!-- /.row -->

            <div class="row text-center home-text py-5">
                <h1 class="fw-bolder pt-5">Latest News</h1>
                <p class="fw-bold fs-4">
                    Stay updated with the latest news, updates, and articles from the world of Boolean & Dragons. From
                    new
                    content releases to community spotlights, there's always something happening.
                </p>
            </div>
            <!-- /.row -->

            <div class="row text-center home-text py-5">
                <h2 class="fw-bold pt-5">
                    Subscribe to our newsletter
                </h2>
                <form action="" method="get">
                    <label for="newsletter" class="fw-bold fs-4 px-3">Insert your e-mail:</label>
                    <input type="email" name="newsletter" id="newsletter" placeholder=""
                        class="fw-bold fs-4 rounded bg-dark border-0 text-danger">
                </form>
            </div>
            <!-- /.row -->

            <div class="row text-center home-text py-5">
                <h2 class="fw-bold pt-5">Join the Community</h2>
                <p class="fw-bold fs-4">
                    Boolean & Dragons isn't just a toolset—it's a community.
                    Join thousands of other players and dungeon masters in our forums, participate in community events,
                    and
                    share your love for roleplaying games.
                </p>
                <div>
                    <a href="{{ route('login') }}" class="btn btn-lg border-danger home-text px-5 py-3 fw-bold fs-4">
                        Sign In
                    </a>
                    <span class="fw-bold fs-4 px-5">or</span>
                    <a href="{{ route('register') }}" class="btn btn-lg border-danger home-text px-5 py-3 fw-bold fs-4">
                        Register
                    </a>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- container -->

    </div>
    <!-- /.bg-gradient -->

    <svg class="wave-1hkxOo wave-reverse" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"
        preserveAspectRatio="none">
        <path class="wavePath-haxJK1 animationPaused-2hZ4IO"
            d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z"
            fill="currentColor"></path>
    </svg>
    <!-- /.svg reverse -->

</div>
<!-- /.inside-waves -->
