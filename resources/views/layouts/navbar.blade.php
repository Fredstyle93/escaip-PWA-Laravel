<section class="navbar-l">
    <section class="navbar-wrapper">
        <a href="{{ Auth::user() ? route('home') : route('welcome')}}" class="navbar-logo"><img src="images/icons/escaip-logo.svg" alt=""></a>
        @auth
            <nav class="navbar-links">
                <a href="" class="navbar-link"><img src="images/icons/notifications.svg" alt=""></a>
                <a href="" class="navbar-link"><img src="images/icons/add.svg" alt=""></a>
                <a href="" class="navbar-link"><img src="images/users/profil.jpg" alt=""></a>
                <a class="dropdown-item" href=""
                                    onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </nav> 
        @else
            <nav class="navbar-auth-links">
                <a href="{{ route('login') }}" class="navbar-auth-link"> {{ __("Se connecter") }} </a>
                <a href="{{ route('register') }}" class="navbar-auth-link"> {{ __("S'inscrire") }} </a>
            </nav>
        @endguest
    </section>
</section>