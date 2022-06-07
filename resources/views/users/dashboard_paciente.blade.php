@extends('layouts.paciente')
@section('title', 'Inicio')
@section('content')
<h5 align="center">Inicio</h5>
<p align="center">Bienvenido. Aqui podrás separar tu cita en la posta más cercana a tu hogar. </p>
<div class="row justify-content-center">
    <div class="col-10">
    <div class="row">            
            <div class="col-md-6 col-6 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                    <div class="card-body" style="background-color: #5AC3F0">
                        <div id="col-md-10">
                            <div class="caja"><i class="fas fa-calendar" id="blanco"></i></div>
                            <div class="caja" id="blanco">SEPARA TU CITA</div>
                        </div>
                    </div>

                    <div class="card-body" id="blanco" style="background-color: #5AC3F0">Separa tu cita en la posta más cercana</div>
                    <div class="card-body" style="background-color: #5AC3F0">
                    <a href="" id="blanco" class="btn btn-block btn-success">SEPARAR AHORA</a>
                    </div>
                </div>
                </div>

                <div class="col-md-6 col-6 justify-content-center mb-5" >
                    <div class="card m-auto" style="width: 18rem;">
                        <div class="card-body" style="background-color: #17739B">
                        <div id="col-md-10">
                            <div class="caja"><i class="fas fa-file" id="blanco"></i></div>
                            <div class="caja" id="blanco">MIS PROXIMAS CITAS</div>
                        </div>
                        </div>
                        <div class="card-body" id="blanco" style="background-color: #17739B">Revisa tus citas pendientes</div>
                        <div class="card-body" style="background-color: #17739B">
                            <a href="{{-- {{route('login')}} --}}" class="btn btn-block btn-success">VER CITAS</a>
                            </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection