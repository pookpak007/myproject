<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>
<body>


    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!--navbar หน้า home-->
                <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            gallery
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="http://localhost/myproject/public/newgallery">newgallery</a>
                                <a class="dropdown-item" href="http://localhost/myproject/public/newgallery/ant">ant</a>
                                <a class="dropdown-item" href="http://localhost/myproject/public/newgallery/bird">bird</a>
                                <a class="dropdown-item" href="http://localhost/myproject/public/newgallery/cat">cat</a>
                                <a class="dropdown-item" href="http://localhost/myproject/public/newgallery/god">god</a>
                                <a class="dropdown-item" href="http://localhost/myproject/public/newgallery/spider">spier</a>
                                                       
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            table
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="http://localhost/myproject/public/teacher">teacher<span class="sr-only">(current)</span></a>                
                            <a class="nav-link" href="http://localhost/myproject/public/student">student<span class="sr-only">(current)</span></a>
                            <a class="nav-link" href="http://localhost/myproject/public/table">table<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost/myproject/public/covid19">covid19<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost/myproject/public/staff">staff<span class="sr-only">(current)</span></a>
                        </li>
                        
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CRUD Generator
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="nav-link" href="http://localhost/myproject/public/post">post<span class="sr-only">(current)</span></a>                
                            <a class="nav-link" href="http://localhost/myproject/public/profile">profile<span class="sr-only">(current)</span></a>
                            <a class="nav-link" href="http://localhost/myproject/public/vehicles">vehicles<span class="sr-only">(current)</span></a>
                            <a class="nav-link" href="http://localhost/myproject/public/book">book<span class="sr-only">(current)</span></a>
                            <a class="nav-link" href="http://localhost/myproject/public/product">product<span class="sr-only">(current)</span></a>
                            <a class="nav-link" href="http://localhost/myproject/public/order">order<span class="sr-only">(current)</span></a>
                            <a class="nav-link" href="http://localhost/myproject/public/payment">payment<span class="sr-only">(current)</span></a>
                            <a class="nav-link" href="http://localhost/myproject/public/order-product">order-product<span class="sr-only">(current)</span></a>

                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="http://localhost/myproject/public/vehicles/pdf">vehicles PDF<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                </div>
                

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
            @yield('content')
        </main>
    </div>
</body>
</html>
