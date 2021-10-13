@extends('layouts.app')

@section('content')


<div class="form-screen">
    <a href="/" class="easion-logo"><i class="fab fa-staylinked"></i> <span>QORILAZO</span></a>
    <div class="card account-dialog">
        <div class="card-header bg-primary text-white"> Iniciar sesión </div>
        <div class="card-body">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">                    
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="correo">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">                    
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Contraseña">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">                    
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="custom-control-label" for="remember">
                            {{ __('Recuerdame') }}
                        </label>
                    </div>
                    
                </div>
                <div class="account-dialog-actions"> 
                    <button type="submit" class="btn btn-primary">
                        {{ __('Ingresar') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                    
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
