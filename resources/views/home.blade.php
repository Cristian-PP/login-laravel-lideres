@extends('layouts.app')

@section('content')


<body class="page-header-fixed">
    
    <form class="search-form" action="#" method="GET">
        @csrf  

        <div class="input-group">
            <input type="text" name="search" class="form-control search-input" placeholder="Search...">
                <span class="input-group-btn">
                    <button class="btn btn-default close-search waves-effect waves-button waves-classic" type="button"><i class="fa fa-times"></i></button>
                </span>
        </div><!-- Input Group -->
    </form><!-- Search Form -->
    <main class="page-content content-wrap">
        <div class="navbar">
            <div class="navbar-inner">
                <div class="sidebar-pusher">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic push-sidebar">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <div class="logo-box">
                    <a href="#" class="logo-text"><span>Rotary</span></a>
                </div><!-- Logo Box -->
                <div class="search-button">
                    <a href="javascript:void(0);" class="waves-effect waves-button waves-classic show-search"><i class="fa fa-search"></i></a>
                </div>
                <div class="topmenu-outer">
                    <div class="top-menu">
                        <ul class="nav navbar-nav navbar-left">
                        </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle waves-effect waves-button waves-classic" data-toggle="dropdown">
                                <span class="user-name">{{ Auth::user()->name }}</span>
                            </a>
                        </li>
                        <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span><i class="fa fa-sign-out m-r-xs"></i>Cerrar Sesión</span>
                            </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                     @csrf
                                 </form>
                        </li>
                    </ul><!-- Nav -->
                    </div><!-- Top Menu -->
                </div>
            </div>
        </div><!-- Navbar -->


        <div class="page-sidebar sidebar">
            <div class="page-sidebar-inner slimscroll">
                <div class="sidebar-header">
                    <div class="sidebar-profile">
                        <span><img class="img-circle avatar" src="{{ asset('css/assets/images/rotary-1.png') }}" width="60" height="60" alt="logo-rotary"></span>
                    </div>
                    
                </div>
                <ul class="menu accordion-menu">
                    <li class="active"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                    <li >
                        <!-- quien puede ver esta opción -->
                        @can('affiliates')
                        <a href="{{ route('affiliates.members') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Afiliados</p></a>
                        @endcan
                    </li>

                    <li >
                        <!--quien puede ver esta opción -->
                        @can('claves')
                        <a href="{{ route('claves') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Claves</p></a>
                        @endcan
                    </li>

                    <li >
                        <!-- quien puede ver esta opción -->
                        @can('upload')
                        <a href="{{ route('file-import') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Archivo</p></a>
                        @endcan
                    </li>
                </ul>
            </div><!-- Page Sidebar Inner -->
        </div><!-- Page Sidebar -->

        <div class="page-inner">
            <div class="page-title">
                <h3>Dashboard</h3>
                <div class="page-breadcrumb">
                    <ol class="breadcrumb">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <div id="main-wrapper">
                <div class="row">
                    <div class="col-md-12">
                        <h1 >Lideres de Puebla</h1>
                        <h2> Bienvenido al Panel de Lideres de Puebla</h2>  
                    </div>
                </div><!-- Row -->
            </div><!-- Main Wrapper -->
        <div class="page-footer">
        <p class="no-s">2022 &copy; Lideres de Puebla.</p>
        </div>
    </div><!-- Page Inner -->
    </main><!-- Page Content -->
    <div class="cd-overlay"></div>

</body>
@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
