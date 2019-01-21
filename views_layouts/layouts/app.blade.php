<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'BDE Cesi Strasbourg') }}</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Fonts & FontAwesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <header>
                <nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="logo">
                            {{ config('app.name', 'BDE Cesi Strasbourg') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerNavbar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="headerNavbar">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
                            </ul>
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ url('/') }}">{{ __('Accueil') }} <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Evènements') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/shop') }}">{{ __('Boutique') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Boîte à idées') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Profil') }}</a>
                                </li>
                                @guest
                                <li class="nav-item">
                                    <a class="btn btn-outline-secondary" href="{{ route('login') }}">{{ __('Connexion') }}</a>
                                </li>
                                @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="btn btn-outline-secondary" href="{{ route('register') }}">{{ __('Créer un compte') }}</a>
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
            </header>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
        <footer class="site-footer">
            <div class="container-fluid">
                <div class="row marginbot">
                    <div class="col-md-4 offset-md-4 text-center">
                        Retrouvez l'activité du BDE sur
                    </div>
                </div>
                <div class="row marginbot">
                    <div class="col-md-4 offset-md-4 d-flex justify-content-center">
                        <div class="container-fluid">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-1 d-flex justify-content-center">
                                    <a href="#"><i class="fab fa-2x fa-twitter-square"></i></a>
                                </div>
                                <div class="col-md-1 d-flex justify-content-center">
                                    <a href="#"><i class="fab fa-2x fa-linkedin"></i></a>
                                </div>
                                <div class="col-md-1 d-flex justify-content-center">
                                    <a href="#"><i class="fab fa-2x fa-youtube-square"></i></a>
                                </div>
                                <div class="col-md-1 d-flex justify-content-center">
                                    <a href="#"><i class="fab fa-2x fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center marginbot">
                    <div class="col-md-4">
                        <div class="container-fluid">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-auto d-flex justify-content-center">
                                    <a href="#">Politique de confidentialité</a>
                                </div>
                                <div class="col-md-auto d-flex justify-content-center">
                                    <a href="#">Mentions légales</a>
                                </div>
                                <div class="col-md-auto d-flex justify-content-center">
                                    <a href="#">Crédits</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <div class="container-fluid">
                            <div class="row d-flex justify-content-center">
                                <div class="col-md-12">
                                    <p class="text-center">@BDECESI 2019</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>