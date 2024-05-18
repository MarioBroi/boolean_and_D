@extends('layout.app')

@section('main-content')
    <section class="title">
        <div class="title-bg">
            <div class="welcome-container">
                <div class="title-bg">
                    <img src="/resources/img/welcome-bg.jpg" alt="">
                    <div class="welcome-title">
                        <h1>Boolean & Dragons: Your Portal to Epic Fantasy Roleplaying</h1>
                        <p class="title-text">
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
                    <!-- /.welcome-title -->
                </div>
                <!-- /.title-bg -->
            </div>
            <!-- /.welcome-container -->
        </div>
        <!-- /.title-bg -->
    </section>
    <!-- /.title -->

    <div class="welcome-container-small">
        <section class="start-today">
            <div class="start-left">
                <h2>Start Your Adventure Today</h2>
                <p>
                    Design your own unique character with our intuitive character builder. Choose from a variety of stats to
                    bring your character to life.
                </p>
            </div>
            <!-- /.start-left -->
            <div class="start-right">
                <a href="">
                    <div class="card-create">
                        <p>
                            Create Your Character Here
                            <i class="fa-solid fa-gavel"></i>
                        </p>
                    </div>
                    <!-- /.card -->
                </a>
            </div>
            <!-- /.start-right -->
        </section>
        <!-- /.start-today -->
    </div>
    <!-- /.welcome-container-small -->

    <svg class="wave-1hkxOo wave" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"
        preserveAspectRatio="none">
        <path class="wavePath-haxJK1 animationPaused-2hZ4IO"
            d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z"
            fill="currentColor"></path>
    </svg>

    <div class="back-gradient">

        <section class="manage-game">
            <div class="welcome-container">
                <h2>Manage Your Games</h2>
                <p>
                    Update character sheets in real-time with our game management tools. No more messy paperwork!
                </p>
                <a href="">
                    Update
                </a>
            </div>
            <!-- /.welcome-container -->
        </section>
        <!-- /.manage-game -->

        <div class="welcome-container">
            <section class="features">
                <h2>Features</h2>
                <div class="features-flex">
                    <div class="features-left">
                        <a href="">
                            <h5>
                                Character Builder:
                            </h5>
                            <p>
                                Create detailed characters with ease, including custom stats, equipment, and abilities.
                            </p>
                        </a>
                    </div>
                    <div class="features-right">
                        <a href="">
                            <h5>
                                Items Library:
                            </h5>
                            <p>
                                Access a vast collection of items, from clubs to epic handaxe.
                            </p>
                        </a>
                    </div>
                </div>
                <!-- /.features-flex -->

            </section>
            <!-- /.features -->
        </div>
        <!-- /.welcome-container -->

        <section class="news">
            <h2>Latest News</h2>
            <p>
                Stay updated with the latest news, updates, and articles from the world of Boolean & Dragons. From new
                content releases to community spotlights, there's always something happening.
            </p>
            <h3>
                Subscribe to our newsletter
            </h3>
            <form action="" method="get">
                <label for="newsletter">Inserisci la tua e-mail:</label>
                <input type="email" name="newsletter" id="newsletter" placeholder="test@test.com" class="newsletter">
            </form>
        </section>
        <!-- /.news -->

    </div>
    <!-- /.bg-gradient -->

    <svg class="wave-1hkxOo wave-reverse" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"
        preserveAspectRatio="none">
        <path class="wavePath-haxJK1 animationPaused-2hZ4IO"
            d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383 C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868 1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z"
            fill="currentColor"></path>
    </svg>


    <section class="join-community">
        <h4>Join the Community</h4>
        <p>
            Boolean & Dragons isn't just a toolset—it's a community.
            Join thousands of other players and dungeon masters in our forums, participate in community events, and
            share your love for roleplaying games.
        </p>
        <a href="">Join Now</a>
        <a href="">Learn More</a>
    </section>
    <!-- /.join-community -->

    <section class="get-ready">
        <h4>Get Started</h4>
        <p>
            Ready to embark on your next adventure? Sign up for free and start creating your hero today!
        </p>
        <a href="">Sign Up</a>
        <a href="">Log In</a>
    </section>
    <!-- /.get-ready -->
@endsection
