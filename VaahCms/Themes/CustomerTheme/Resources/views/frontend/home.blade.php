@extends("customertheme::frontend.layouts.default")

@section('vaahcms_extend_frontend_head')

@endsection

@section('vaahcms_extend_frontend_css')

@endsection

@section('vaahcms_extend_frontend_scripts')

@endsection

@section('content')

    <section class="hero is-info is-medium is-bold">
        <div class="hero-head">
            <nav class="navbar">
                <div class="container">
                    <div class="navbar-brand">
                        <a class="navbar-item" href="../">
                            <img src="http://bulma.io/images/bulma-type-white.png" alt="Logo">
                        </a>
                        <span class="navbar-burger burger" data-target="navbarMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                    </div>
                    <div id="navbarMenu" class="navbar-menu">
                        <div class="navbar-end">
                            <div class="tabs is-right">
                                <ul>
                                    <li class="is-active"><a>Home</a></li>
                                    <li><a href="/">Welcome</a></li>
                                    <li><a href="">Features</a></li>
                                    @auth()
                                    <li><a href="/signout">Log out</a></li>
                                    @endauth
                                    @guest()
                                        <li><a href="/signin">Login</a></li>
                                        <li><a href="/signup">Register</a></li>
                                    @endguest

                                </ul>
                                <span class="navbar-item">
                                        <a class="button is-white is-outlined"
                                           href="{!! config('settings.global.link_youtube'); !!}">
                                            <span class="icon">
                                                <i class="fa fa-github"></i>
                                            </span>
                                            <span title="Hello from the other side">View Source</span>

                                        </a>
                                    </span>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">
                    @auth()
                        Hi.. {{Auth::user()->name}} welcome on board <br>
                    @endauth
                </h1>
                <h2 class="subtitle">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat.
                </h2>
            </div>
        </div>
    </section>
    <div class="box cta">
        <p class="has-text-centered">
            <span class="tag is-primary">
                New</span> Ut enim ad minim veniam, quis nostrud exercitation
            ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>
    <section class="container">
        <div class="columns features">
            <div class="column is-4">
                <div class="card is-shady">
                    <div class="card-image has-text-centered">
                        <i class="fa fa-paw"></i>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h4>Tristique senectus et netus et. </h4>
                            <p>Purus semper eget duis at tellus at urna condimentum mattis.
                                Non blandit massa enim nec. Integer enim neque volutpat ac
                                tincidunt vitae semper quis. Accumsan tortor posuere ac ut
                                consequat semper viverra nam.</p>
                            <p><a href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4">
                <div class="card is-shady">
                    <div class="card-image has-text-centered">
                        <i class="fa fa-empire"></i>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h4>Tempor orci dapibus ultrices in.</h4>
                            <p>Ut venenatis tellus in metus vulputate. Amet consectetur
                                adipiscing elit pellentesque. Sed arcu non odio euismod
                                lacinia at quis risus. Faucibus turpis in eu mi bibendum
                                neque egestas cmonsu songue. Phasellus vestibulum lorem
                                sed risus.</p>
                            <p><a href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column is-4">
                <div class="card is-shady">
                    <div class="card-image has-text-centered">
                        <i class="fa fa-apple"></i>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <h4> Leo integer malesuada nunc vel risus. </h4>
                            <p>Imperdiet dui accumsan sit amet nulla facilisi morbi.
                                Fusce ut placerat orci nulla pellentesque dignissim enim.
                                Libero id faucibus nisl tincidunt eget nullam.
                                Commodo viverra maecenas accumsan lacus vel facilisis.</p>
                            <p><a href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="app">

    </div>
    <footer class="footer">
        <div class="container">
            <div class="columns">
                <div class="column is-3 is-offset-2">
                    <h2><strong>Category</strong></h2>
                    <ul>
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Vestibulum errato isse</a></li>
                        <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                        <li><a href="#">Aisia caisia</a></li>
                    </ul>
                </div>
                <div class="column is-3">
                    <h2><strong>Category</strong></h2>
                    <ul>
                        <li><a href="#">Labore et dolore magna aliqua</a></li>
                        <li><a href="#">Kanban airis sum eschelor</a></li>
                        <li><a href="#">Modular modern free</a></li>
                        <li><a href="#">The king of clubs</a></li>
                    </ul>
                </div>
                <div class="column is-4">
                    <h2><strong>Category</strong></h2>
                    <ul>
                        <li><a href="#">Objects in space</a></li>
                        <li><a href="#">Playing cards with coyote</a></li>
                        <li><a href="#">Goodbye Yellow Brick Road</a></li>
                        <li><a href="#">The Garden of Forking Paths</a></li>
                    </ul>
                </div>
            </div>
            <div class="content has-text-centered">
                <p>
                    <a class="icon" href="https://github.com/BulmaTemplates/bulma-templates">
                        <i class="fa fa-github"></i>
                    </a>
                </p>
                <div class="control level-item">
                    <a href="https://github.com/BulmaTemplates/bulma-templates">
                        <div class="tags has-addons">
                            <span class="tag is-dark">Bulma Templates</span>
                            <span class="tag is-info">MIT license</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <script src="../js/bulma.js"></script>
    </footer>

@endsection
