<!DOCTYPE html>
<html>
    
<!-- Mirrored from lambdathemes.in/modern/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 11:05:13 GMT -->
<head>
        
        <!-- Title -->
        <title>Lideres | Login</title>
        
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcode" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/assets/plugins/pace-master/themes/blue/pace-theme-flash.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/assets/plugins/uniform/css/uniform.default.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('css/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/assets/plugins/fontawesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/assets/plugins/line-icons/simple-line-icons.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('css/assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('css/assets/plugins/waves/waves.min.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('css/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/assets/plugins/3d-bold-navigation/css/style.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('css/assets/plugins/weather-icons-master/css/weather-icons.min.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('css/assets/plugins/metrojs/MetroJs.min.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('css/assets/plugins/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css"/>	
        <link href="{{ asset('css/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" rel="stylesheet" />

        
        <!-- Theme Styles -->
        <link href="{{ asset('css/assets/css/modern.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/assets/css/themes/white.css') }}" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('css/assets/css/custom.css') }}" rel="stylesheet" type="text/css"/>
        
        <script src="{{ asset('css/assets/plugins/3d-bold-navigation/js/modernizr.js') }}"></script>
        <script src="{{ asset('css/assets/plugins/offcanvasmenueffects/js/snap.svg-min.js') }}"></script>

        
    </head>
    <body class="page-login">

	
@yield('content')
        <!-- Javascripts -->
        <script src="{{ asset('css/assets/plugins/jquery/jquery-2.1.3.min.js') }}"></script>
        <script src="{{ asset('css/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('css/assets/plugins/pace-master/pace.min.js') }}"></script>
        <script src="{{ asset('css/assets/plugins/jquery-blockui/jquery.blockui.js') }}"></script>
        <script src="{{ asset('css/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('css/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('css/assets/plugins/switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('css/assets/plugins/uniform/jquery.uniform.min.js') }}"></script>
        <script src="{{ asset('css/assets/plugins/offcanvasmenueffects/js/classie.js') }}"></script>
        <script src="{{ asset('css/assets/plugins/offcanvasmenueffects/js/main.js') }}"></script>
        <script src="{{ asset('css/assets/plugins/waves/waves.min.js') }}"></script>
        <script src="{{ asset('css/assets/plugins/3d-bold-navigation/js/main.js') }}"></script>
        <script src="{{ asset('css/assets/js/modern.min.js') }}"></script>

         <script src="{{ asset('css/assets/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
         <script src="{{ asset('css/assets/plugins/jquery-counterup/jquery.counterup.min.js') }}"></script>
         <script src="{{ asset('css/assets/plugins/toastr/toastr.min.js') }}"></script>
         <script src="{{ asset('css/assets/plugins/flot/jquery.flot.min.js') }}"></script>
         <script src="{{ asset('css/assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
         <script src="{{ asset('css/assets/plugins/flot/jquery.flot.symbol.min.js') }}"></script>
         <script src="{{ asset('css/assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
         <script src="{{ asset('css/assets/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
         <script src="{{ asset('css/assets/plugins/curvedlines/curvedLines.js') }}"></script>
         <script src="{{ asset('css/assets/plugins/metrojs/MetroJs.min.js') }}"></script>
         <script src="{{ asset('css/assets/js/modern.min.js') }}"></script>
         <script src="{{ asset('css/assets/js/pages/dashboard.js') }}"></script>

        <script src="{{ asset('css/assets/plugins/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('css/assets/js/pages/form-select2.js') }}"></script>
        

         
        
    </body>
</html>


{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
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
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
