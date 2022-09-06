@extends('layouts.app')

@section('content')
<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">
				
					<div class="cardx fat">
						<div class="card-body col-md-5 center">
                                <img class="logo-name text-lg text-center" src="{{ asset('css/assets/images/logo-rotary-cel.png') }}" width="100%">
							<h4 class="card-title">Restablecer la contraseña</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">
								<div class="form-group">
									<label for="email">Correo Electrónico</label>
									<input id="email" type="email" class="form-control" name="email" placeholder="Correo Electrónico" value="{{ $email ?? old('email') }}">
                                    <span class="text-danger">@error('email'){{$message}} @enderror</span>
								</div>
								<div class="form-group">
									<label for="password">Nueva Contraseña</label>
									<input id="password" type="password" class="form-control" name="password" placeholder="Ingresa la nueva contraseña">
                                    <span class="text-danger">@error('password'){{$message}}@enderror</span>
								</div>
								<div class="form-group">
									<label for="password-confirm">Confirmar Contraseña</label>
									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirma la nueva contraseña">
                                    <span class="text-danger">@error('password_confirmation'){{$message}} @enderror</span>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Restablecer la Contraseña
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="card-body col-md-3 center">
						Lideres de Puebla &copy; 2022 &mdash; Rotary
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="jquery-3.4.1.min.js"></script>
	<script src="bootstrap/js/popper.js"></script>
	<script src="bootstrap/js/bootstrap.js"></script>
	<script src="js/my-login.js"></script>

    @endsection