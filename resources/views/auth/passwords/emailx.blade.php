@extends('layouts.app')

@section('content')

<div class="page-inner">
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-3 center">
                <div class="login-box">
                    <a href="index.html" class="logo-name text-lg text-center"><img src="{{ asset('css/assets/images/logo-rotary-cel.png') }}"></a></a>
                    <p class="text-center m-t-md">ingrese su dirección de correo electrónico a continuación para restablecer su contraseña</p>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="m-t-md" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Enviar enlace de restablecimiento de contraseña') }}
                        </button>
                    </form>
                    {{-- <p class="text-center m-t-xs text-sm">2022 &copy; Lideres de Puebla.</p> --}}
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
</div><!-- Page Inner -->


{{-- <div class="container">
    <div class="row justify-content-center center">
        <div class="col-md-8">
            <div class="card" >
                <div class="card-header">{{ __('Reestablecer Contraseña') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <a href="index.html" class="logo-name text-lg text-center"><img src="{{ asset('css/assets/images/logo-rotary-cel.png') }}"></a></a>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electronico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar enlace de restablecimiento de contraseña') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection


{{-- <div class="page-inner">
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
</div><!-- Page Inner --> --}}