<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/css/body.css') }}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" ') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('assets2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('assets2/img/b.png')}}">
    <style>
        body {
            background-color: dimgray;
        }
        svg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        display: block;
        background-color: #0e4166;
        background-image: linear-gradient(to bottom, rgba(14, 65, 102, 0.86), #0e4166);
    }

    </style>
</head>
<body>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="100%" viewBox="0 0 1600 900" preserveAspectRatio="xMidYMax slice">
    <defs>
        <linearGradient id="bg">
            <stop offset="0%" style="stop-color:rgba(130, 158, 249, 0.06)"></stop>
            <stop offset="50%" style="stop-color:rgba(76, 190, 255, 0.6)"></stop>
            <stop offset="100%" style="stop-color:rgba(115, 209, 72, 0.2)"></stop>
        </linearGradient>
        <path id="wave" fill="url(#bg)" d="M-363.852,502.589c0,0,236.988-41.997,505.475,0
s371.981,38.998,575.971,0s293.985-39.278,505.474,5.859s493.475,48.368,716.963-4.995v560.106H-363.852V502.589z" />
    </defs>
    <g>
        <use xlink:href='#wave' opacity=".3">
            <animateTransform
      attributeName="transform"
      attributeType="XML"
      type="translate"
      dur="10s"
      calcMode="spline"
      values="270 230; -334 180; 270 230"
      keyTimes="0; .5; 1"
      keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
      repeatCount="indefinite" />
        </use>
        <use xlink:href='#wave' opacity=".6">
            <animateTransform
      attributeName="transform"
      attributeType="XML"
      type="translate"
      dur="8s"
      calcMode="spline"
      values="-270 230;243 220;-270 230"
      keyTimes="0; .6; 1"
      keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
      repeatCount="indefinite" />
        </use>
        <use xlink:href='#wave' opacty=".9">
            <animateTransform
      attributeName="transform"
      attributeType="XML"
      type="translate"
      dur="6s"
      calcMode="spline"
      values="0 230;-140 200;0 230"
      keyTimes="0; .4; 1"
      keySplines="0.42, 0, 0.58, 1.0;0.42, 0, 0.58, 1.0"
      repeatCount="indefinite" />
        </use>
    </g>
</svg>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                    @yield('title')
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <ul class="navbar-nav ms-auto">
                    
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                </div>
            </div>
        </nav> --}}

    <center><img src="https://seeklogo.com/images/S/speedhunters-sh-logo-2AC7FE0CFD-seeklogo.com.png" alt="" width="100pax" style="padding-top:30px;"></center>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets2/js/sb-admin-2.min.js') }}"></script>
</body>
</html>
