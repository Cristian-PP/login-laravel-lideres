@extends('layouts.app')

@section('title', 'Editar Usuario')

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
                        <li class="active"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Afiliados</p></a></li>
                        <li ><a href="{{ route('affiliates.upload') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Archivo</p></a></li>
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
    
    
            <div class="page-inner">
                <div class="page-title">
                    <h3>Editar</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Editar</li>
                        </ol>
                    </div>
                </div>

                <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-body">

                                    <a href="{{ route('affiliates.members') }}" class="btn btn-primary m-b-sm">Ver listado de Usuarios</a>
                                    <h2>Editar Miembro</h2>

                                    <form action="{{ route('affiliates.update', $user) }}" method ="POST">
                                        @csrf
                                        {{ method_field('PUT') }}
                                        <h4 class="no-m m-b-sm">Nombre</h4>
                                        <input type="text" name="name" class="js-states form-control" tabindex="-1" placeholder="Nombre" style="width: 100%" value="{{ $user->name }}"/>
                                        {{-- <input type="text" name="name" placeholder="Nombre" value="{{ $user->name }}"> --}}
                                        <h4 class="no-m m-b-sm m-t-lg">Correo Electrónico</h4>                                        
                                        <input type="text" name="email" class="js-states form-control" tabindex="-1" placeholder="Correo Electrónico" style="width: 100%" value="{{ $user->email }}"/>
                                        {{-- <input type="text" name="email" placeholder="Correo Electrónico" value="{{ $user->email }}"> --}}
                                        <h4 class="no-m m-b-sm m-t-lg">Clave</h4>
                                        <input type="text" name="clave" class="js-states form-control" tabindex="-1" placeholder="Clave" style="width: 100%" value="{{ $user->clave }}"/>
                                        {{-- <input type="text" name="clave" placeholder="Clave" value="{{ $user->clave }}"> --}}
                                        {{-- <h4 class="no-m m-b-sm m-t-lg">Estatus</h4>
                                        <select class="js-states form-control" name="status" tabindex="-1" placeholder="Estatus" style="width: 100%" value="{{ $user->status }}">
                                                <option value="1">Activo</option>
                                                <option value="0">Suspendido</option>
                                        </select> --}}
                                        {{-- <input type="text" name="status" class="js-states form-control" tabindex="-1" placeholder="Estatus" style="width: 100%" value="{{ $user->status }}"/>
                                        <input type="text" name="status" placeholder="Estatus" value="{{ $user->status }}"> --}}
                                        {{-- <a href="#"> --}}
                                        <input type="submit" class="btn btn-primary m-b-sm" style="margin-top:50px;" value="Guardar">
                                        {{-- </a> --}}
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


  {{-- <div id="main-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Usuarios</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    <table id="example" class="display table" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Clave</th>
                                                <th>Contraseña</th>
                                                <th>-</th>
                                                <th>-</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Clave</th>
                                                <th>Correo</th>
                                                <th>-</th>
                                                <th>-</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($user as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->clave}}</td>
                                                <td>{{$item->email}}</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                       </table>  
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                </div><!-- Main Wrapper --> --}}