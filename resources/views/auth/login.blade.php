{{--  Vista del login  --}}
@extends('layouts.auth')
@section('content')
<<<<<<< HEAD
    <title>Citas médicas</title>
=======
    <title>Sistema web</title>
>>>>>>> origin/main
    <div class="container">
        <div class="row d-flex justify-content-center ">
        <div class="col-md-4"  style="margin:70px;align=center">
            <div class="card">
                <div class="card-header">
                    <div id="azul" align="left"> 
                        <img src="{{asset('images/minedu.png')}}" class="img-fluid" width="180px" alt="minedu">
                    </div>
                    <div id="" align="center">
                       {{--  <i class="fas fa-user-graduate" id="azul"></i></i> --}}
                        <h5 id="azul">SISTEMA WEB DE GESTIÓN DE CITAS</h5>
                    </div>
                    <div id="amarillo" align="center">
                        Iniciar Sesión
                    </div>

                    <div id="azul" class="text-center">
                        Por favor, ingrese los datos solicitados
                    </div>
                </div>


                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        {{-- Codigo de egresado--}}
                        <div id="azul">
                            Correo
                        </div>
                        <div class="form-group row">

                            <div class="col-md-12">
                                <input id="egresado_matricula" type="egresado_matricula" class="form-control @error('egresado_matricula') is-invalid @enderror" name="egresado_matricula" value="{{ old('egresado_matricula') }}" required autocomplete="egresado_matricula" autofocus>

                                @error('egresado_matricula')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        {{-- Contraseña--}}
                        <div id="azul">
                            Contraseña
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0" id="" align="center">
                            <div class="col-md-8 offset-md-2" >
                                <button type="submit" class="btn btn-primary" style="background-color: #004A98;">
                                    {{ __('Iniciar Sesión') }}
                                </button>

                            </div>
                        </div>
                        <div id="" align="center">
                            @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" id="azul">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                        </div>
                    </form>
                </div>
            </div>

            <div id="espacio" align="center">
            <div id="col-md-10">
            <a target="_blank" href="https://web.facebook.com/minsaperu">
                <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook minsa">
            </a>
            <a target="_blank" href="https://www.instagram.com/minsa_peru">
                <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram minsa">
            </a>
            <a target="_blank" href="https://www.youtube.com/channel/UCpR7spJxkXzqAI9aBr7Xacw">
                <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube minsa">
            </a>

            </div>

        </div>



    </div>
    </div>

@endsection


