@extends('layouts.main', [
'class' => 'login-page',
'backgroundImagePath' => "{{ asset('/public/img/bg/fabio-mangione.jpg') }}"

])

@section('content')

    <div class="content">
        <div class="container">
       
        <div id="carrusel-contenido" style="margin: -50px 600px 32px 0">
            <div id="carrusel-caja">
                <div class="carrusel-elemento">
                    <img class="imagenes" src="{{ asset('img') }}/loglogin.png" >    
                </div>
                <div class="carrusel-elemento">   
                    <img class="imagenes" src="{{ asset('img') }}/junta.jpg" >
                </div>
                <div class="carrusel-elemento">   
                    <img class="imagenes" src="{{ asset('img') }}/aula_login.jpg" >                      
                </div>
            </div>
        </div>
               
            <div class=" col-md-5 ml-auto mr-auto" >
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card card-login">
                    <div class="card-header ">
                        <div class="card-header ">
                            <h3 class="header text-center">{{ __('Inicio de Sesión') }}</h3>
                        </div>
                    </div>
                    <div class="card-body ">

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                </span>
                            </div>
                            <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Contraseña') }}" type="password" required>

                            @if ($errors->has('password'))
                            <span class="invalid-feedback" style="display: block;" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" name="remember" type="checkbox" value="" {{ old('remember') ? 'checked' : '' }}>
                                    <span class="form-check-sign"></span>
                                    {{ __('Recordarme') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary" style="background-color:#008a8a">{{ __('Entrar') }}</button>
                            
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="btn btn-link">
                            {{ __('¿Olvidó su contraseña?') }}
                        </a>
                        @endif

                        </div>
                        
                    </div>
                     <!--<div>
                        <a href="{{ route('password.request') }}" class="btn btn-link">
                            {{ __('Olvide la contraseña') }}
                        </a>
                       <a href="{{ route('register') }}" class="btn btn-link float-right">
                            {{ __('Crear cuenta') }}
                        </a>
                    </div>!-->

                </div>
            </form>
        </div>
    </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function() {
        demo.checkFullPageBackgroundImage();
    });
</script>
@endpush