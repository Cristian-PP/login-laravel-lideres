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
                        {{-- <div class="sidebar-profile">
                            <a href="javascript:void(0);" id="profile-menu-link">
                                <div class="sidebar-profile-image">
                                    <img src="assets/images/avatar1.png" class="img-circle img-responsive" alt="">
                                </div>
                                <div class="sidebar-profile-details">
                                    <span><img class="img-circle avatar" src="{{ asset('css/assets/images/rotary-1.png') }}" width="60" height="60" alt="logo-rotary"></span>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                    <ul class="menu accordion-menu">
                        <li ><a href="{{ route('dashboard') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-home"></span><p>Dashboard</p></a></li>
                        <li class="active"><a href="#" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Afiliados</p></a></li>
                        <li ><a href="{{ route('claves') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Número de Socio</p></a></li>
                        <li ><a href="{{ route('file-import') }}" class="waves-effect waves-button"><span class="menu-icon glyphicon glyphicon-list"></span><p>Archivo</p></a></li>
                        
                    </ul>
                </div><!-- Page Sidebar Inner -->
            </div><!-- Page Sidebar -->
    
    
            <div class="page-inner">
                <div class="page-title">
                    <h3>Miembros</h3>
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Miembros</li>
                        </ol>
                    </div>
                </div>
                <div id="main-wrapper">
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
                                                {{-- <th>Acción</th> --}}
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                <th>Clave</th>
                                                <th>Correo</th>
                                                {{-- <th>Estatus</th> --}}
                                                <th>-</th>
                                                {{-- <th>-</th> --}}
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nombre</th>
                                                <th>Apellidos</th>
                                                <th>Clave</th>
                                                <th>Correo</th>
                                                {{-- <th>Estatus</th> --}}
                                                <th>-</th>
                                                {{-- <th>-</th> --}}
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            @foreach ($user as $item)
                                            <tr>
                                                <td>{{$item->id}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->lastname}}</td>
                                                <td>{{$item->clave}}</td>
                                                <td>{{$item->email}}</td>
                                                {{-- <td>-</td> --}}
                                                {{-- <td><a href="{{ route('affiliates.edit') }}" id="addRow" class="btn btn-primary m-b-sm">Editar</a></td> --}}
                                                <td><a href="{{ route('affiliates.edit', $item->id) }}" id="addRow" class="btn btn-primary m-b-sm">Editar</a></td>
                                                {{-- <td><a href="#" id="addRow" class="btn btn-danger m-b-sm">Eliminar</a></td> --}}
                                            </tr>
                                            @endforeach
                                        </tbody>
                                       </table>  
                                    </div>
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