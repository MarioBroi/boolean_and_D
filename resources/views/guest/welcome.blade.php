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

    <section class="manage-game">
        <h3>Manage Your Games</h3>
        <p>
            Update character sheets in real-time with our game management tools. No more messy paperwork!
        </p>
    </section>
    <!-- /.manage-game -->

    <section class="features">
        <h4>Features</h4>
        <div>
            <h6>
                Character Builder:
            </h6>
            <p>
                Create detailed characters with ease, including custom stats, equipment, and abilities.
            </p>
            <h6>
                Items Library:
            </h6>
            <p>
                Access a vast collection of items, from clubs to epic handaxe.
            </p>
        </div>
    </section>
    <!-- /.features -->

    <section class="news">
        <h4>Latest News</h4>
        <p>
            Stay updated with the latest news, updates, and articles from the world of Boolean & Dragons. From new
            content releases to community spotlights, there's always something happening.
        </p>
    </section>
    <!-- /.news -->

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
