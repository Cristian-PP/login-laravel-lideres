@extends('layouts.app')

@section('content')
<div class="page-content">
    <div class="page-inner">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-3 center">
                    <div class="login-box">
                        <a href="index.html" class="logo-name text-lg text-center"><img src="{{ asset('css/assets/images/logo-rotary-cel.png') }}"></a>
                        <p class="text-center m-t-md">Crear cuenta de Lideres de Puebla</p>
                        <form class="m-t-md" method="POST" action="/register">
                                @csrf

                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" placeholder="Apellidos" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo Electronico"  name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="clave" type="text" class="form-control @error('clave') is-invalid @enderror" placeholder="Número de Socio"  name="clave" value="{{ old('clave') }}" required>

                                @error('clave')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            
                            <div class="form-group">
                                
                                <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Contraseña" name="password" required autocomplete="new-password">
                                <p>Minimo 8 caracteres: Al menos une letra en Mayuscula, al menos una letra en minuscula, al menos un número</p>

                                {{-- <script>

                                check-seguridad
                                $(".check-seguridad").strength();

                                jQuery(function($) {
			
                                    $(".check-seguridad").strength({
                                        templates: {
                                        toggle: '<span class="input-group-addon"><span class="glyphicon glyphicon-eye-open {toggleClass}"></span></span>'
                                        
                                        },
                                        scoreLables: {
                                                empty: 'Vacío',
                                                invalid: 'Invalido',
                                                weak: 'Débil',
                                                good: 'Bueno',
                                                strong: 'Fuerte'
                                            }, 
                                        scoreClasses: {
                                                empty: '',
                                                invalid: 'label-danger',
                                                weak: 'label-warning',
                                                good: 'label-info',
                                                strong: 'label-success'
                                            },
                        
                                    });
                                });

                                </script> --}}

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="form-group">
                                <input id="password-confirm" type="password" class="form-control @error('password-confirm') is-invalid @enderror" placeholder="Confirmar Contraseña" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <label>
                                <input type="checkbox"> Acepto los términos y la política
                            </label>
                            <button type="submit" class="btn btn-success btn-block m-t-xs">Registrarme</button>
                            <p class="text-center m-t-xs text-sm">¿Ya tienes una cuenta?</p>
                            <a href="login" class="btn btn-default btn-block m-t-xs">Iniciar sesión</a>
                        </form>
                        <p class="text-center m-t-xs text-sm">2022 &copy; Lideres de Puebla</p>
                    </div>
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
    </div><!-- Page Inner -->
</main><!-- Page Content -->

@endsection


