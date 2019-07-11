<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
    <div id="app">
        <section class="site-wrapper">
            <!-- --------------------------------- NAV BAR --------------------------------- -->
            <section class="navbar-l">
                <section class="navbar-wrapper">
                    @auth
                        <a href="" class="navbar-logo"><img src="images/icons/escaip-logo.svg" alt=""></a>
                        <nav class="navbar-links">
                            <a href="" class="navbar-link"><img src="images/icons/notifications.svg" alt=""></a>
                            <a href="" class="navbar-link"><img src="images/icons/add.svg" alt=""></a>
                            <a href="" class="navbar-link"><img src="images/users/profil.jpg" alt=""></a>
                        </nav> 
                    @else
                        <a href="" class="navbar-logo"><img src="images/icons/escaip-logo.svg" alt=""></a>
                        <nav class="navbar-auth-links">
                            <a href="{{ route('login') }}" class="navbar-auth-link"> {{ __("Se connecter") }} </a>
                            <a href="{{ route('register') }}" class="navbar-auth-link"> {{ __("S'inscrire") }} </a>
                        </nav>
                    @endguest
                </section>
            </section>

            <section class="site-content-wrapper">

                <!-- --------------------------------- SIDEBAR --------------------------------- -->

                <section class="sidebar-l">
                    <section class="sidebar-wrapper">
                        <nav class="sidebar-links">
                            <a href="" class="sidebar-link {{\Request::is('home') ? 'is-active' : ''}}"><img src="images/icons/home.svg" alt=""></a>
                            <a href="" class="sidebar-link {{\Request::is('projects') ? 'is-active' : ''}}"><img src="images/icons/portfolio-icon.svg" alt=""></a>
                            <a href="" class="sidebar-link {{\Request::is('school') ? 'is-active' : ''}}"><img src="images/icons/school-icon.svg" alt=""></a>
                            <a href="" class="sidebar-link {{\Request::is('calendar') ? 'is-active' : ''}}"><img src="images/icons/calendar-icon.svg" alt=""></a>
                        </nav>
                    </section>
                </section>
        
                <!-- --------------------------------- CONTENT --------------------------------- -->
        
                <section class="content-l">
                    @yield('main')
                </section>

            </section>
    
            <!-- --------------------------------- SUBNAV --------------------------------- -->
    
            <section class="subnav-l">
                <section class="subnav-wrapper">
                    <nav class="subnav-links">
                        <a href="" class="subnav-link {{\Request::is('home') ? 'is-active' : ''}}"><img src="images/icons/home.svg" alt=""></a>
                        <a href="" class="subnav-link {{\Request::is('projects') ? 'is-active' : ''}}"><img src="images/icons/portfolio-icon.svg" alt=""></a>
                        <a href="" class="subnav-link {{\Request::is('school') ? 'is-active' : ''}}"><img src="images/icons/school-icon.svg" alt=""></a>
                        <a href="" class="subnav-link {{\Request::is('calendar') ? 'is-active' : ''}}"><img src="images/icons/calendar-icon.svg" alt=""></a>
                    </nav> 
                </section>
            </section>
        </section>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>







{{--  <div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
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
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('main')
    </main>
</div>  --}}
