@extends('layouts.app')

@section('content')

    <body class="page-header-fixed">
        

        <form class="search-form" action="#" method="GET">
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
                                        <span class="user-name">{{ Auth::user()->name }}

                                        </span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-list" role="menu">
                                        <li role="presentation"><a href="profile.html"><i class="fa fa-user"></i>Perfil</a></li>
                                        <li role="presentation">
                                                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out m-r-xs"></i>Cerrar Sesión
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
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
                        <li ><a href="{{ route('dashboard') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        <li ><a href="{{ route('affiliates.members') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Afiliados</p></a></li>
                        <li class="active"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Archivo</p></a></li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
    
    
            <div class="page-inner">
                <div class="page-title">
                    <h3>Subir Archivo</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">SUbir Archivo</li>
                        </ol>
                    </div>
                </div>

                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">
                                    <form action="{{ route('affiliates.upload')}}" method="POST" enctype="multipart/form-data" class="dropzone">
                                        @csrf
                                        <div class="fallback">
                                            {{-- @if (Session::has('message'))
                                            <p>{{ Session::get('message')}}</p>
                                            @endif --}}
                                            <input name="fileCsv" type="file" required>
                                            <br>
                                            <button>Importar Usuarios</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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


{{-- <form action="http://lambdathemes.in/file-upload" class="dropzone">
    <div class="fallback">
        <input name="file" type="file" multiple />
    </div>
</form> --}}