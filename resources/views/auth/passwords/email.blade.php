@extends('layouts.app')

@section('content')

	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center align-items-center h-100">
				<div class="card-wrapper">

					<div class="cardx fat">
						<div class="card-body col-md-5 center">
                            <img class="logo-name text-lg text-center" src="{{ asset('css/assets/images/logo-rotary-cel.png') }}" width="100%">
							<h4 class="card-title">Haz olvidado tu contrseña</h4>
							<form method="POST" class="my-login-validation" novalidate="" action="{{ route('password.email') }}">
                                @csrf

                                @if (session('status'))
                                    <div class="alert alert-ssuccess">
                                        {{ session('status') }}
                                    </div>
                                @endif
								<div class="form-group">
                                    <!-- Email -->
									<label for="email">Correo Electrónico</label>
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Introduce tu correo electrónico">
                                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>
								</div>

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Enviar enlace de contraseña
									</button>
								</div>
							</form>
						</div>
					</div>
					<div class="card-body col-md-3 center">
						<p>Lideres de Puebla &copy; 2022 &mdash; Rotary</p>
					</div>
				</div>
			</div>
		</div>
	</section>
    @endsection