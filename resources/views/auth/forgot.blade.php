@extends('layouts.app')

@section('content')


<div class="page-content">
    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-3 center">
                    <div class="login-box">
                        <a href="index.html" class="logo-name text-lg text-center"><img src="{{ asset('css/assets/images/logo-rotary-cel.png') }}"></a></a>
                        <p class="text-center m-t-md">ingrese su dirección de correo electrónico a continuación para restablecer su contraseña</p>
                        <form class="m-t-md">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Correo Electronico" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Enviar</button>
                            <a href="login" class="btn btn-default btn-block m-t-md">Regresar</a>
                        </form>
                        <p class="text-center m-t-xs text-sm">2022 &copy; Lideres de Puebla.</p>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
    </div><!-- Page Inner -->
</main><!-- Page Content -->


@endsection