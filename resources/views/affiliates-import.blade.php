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
                                        {{-- <span class="user-name">{{ Auth::user()->name }} --}}

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

                                    {{-- <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                          <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                                               <div class="custom-file text-left">
                                                   <input type="file" name="file" class="custom-file-input" id="file">
                                                   <label class="custom-file-label" for="file">Elija el archivo                                                </label>
                                               </div>
                                         </div>
                                                <button type="submit" class="btn btn-primary">Importar Datos</button>
                                               <a class="btn btn-success" href="#">Exportar datos</a>
                                    </form> --}}


                                    <form method='POST' action="{{ route('file-import') }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                           <label for="file" class="form-label">Archivo</label>
                                           <input type="file" class="form-control" id="file" name="file" value="">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success">Importar</button>
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




<!-- Success message -->
{{-- @if(Session::has('success'))
<div class="alert alert-success">
   {{ Session::get('success') }}
</div>
@endif

<form method='post' action="{{ route('employees.importdata') }}" enctype="multipart/form-data">
@csrf
<div class="mb-3">
   <label for="file" class="form-label">File</label>
   <input type="file" class="form-control" id="file" name="file" value="">
</div>

<button type="submit" class="btn btn-success">Import</button>
</form> --}}



    <!-- Success message -->

    {{-- @if(Session::has('success'))
       <div class="alert alert-success">
          {{ Session::get('success') }}
       </div>
    @endif --}}


     <!-- Import data with validation -->
     {{-- <h2 class='mt-5'>Validate and import data</h2> --}}
     {{-- Display errors --}}
     {{-- @if (count($errors) > 0)
         <div class="row">
             <div class="col-md-12 ">
                 <div class="alert alert-danger">
                     <ul>
                         @foreach($errors->all() as $error)
                             <li>{{ $error }} </li>
                          @endforeach 
                     </ul> 
                  </div>
             </div>
          </div>
     @endif --}}

     {{-- <form method='post' action="{{ route('affiliates.validateandimportdata') }}" >
      @csrf
          <button type="submit" class="btn btn-success">Import</button>
      </form>
    --}}

    