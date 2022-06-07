@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <p align="center">Bienvenido. Aquí podrás gestionar las citas de tu posta respectiva</p>
@stop

@section('content')

    <div class="row justify-content-center">
        <div class="col-10">
        <div class="row" align="center">            
                <div class="col-md-6 col-6 justify-content-center mb-5">
                    <div class="card m-auto" style="width: 18rem;">
                        <div class="card-body" style="background-color: #17739B">
                            <div id="col-md-10">
                                <div class="caja" style="color:#ffffff"><i class="fas fa-calendar" ></i></div>
                                <div class="caja" style="color:#ffffff">LISTA DE CITAS</div>
                            </div>
                        </div>
    
                        <div class="card-body" id="blanco" style="background-color: #17739B"><div style="color:#ffffff">Revisa las citas pendientes</div></div>
                        <div class="card-body" style="background-color: #17739B">
                        <a href="" style="color:#ffffff" class="btn btn-block btn-success">VER</a>
                        </div>
                    </div>
                    </div>
    
                    <div class="col-md-6 col-6 justify-content-center mb-5" >
                        <div class="card m-auto" style="width: 18rem;">
                            <div class="card-body" style="background-color: #6EADC8">
                            <div id="col-md-10">
                                <div class="caja" style="color:#ffffff"><i class="fas fa-user-injured" id="blanco"></i></div>
                                <div class="caja" style="color:#ffffff">PACIENTES</div>
                            </div>
                            </div>
                            <div class="card-body" id="blanco" style="background-color: #6EADC8"><div style="color:#ffffff">Revisa los datos del paciente</div></div>
                            <div class="card-body" style="background-color: #6EADC8">
                                <a href="{{-- {{route('login')}} --}}" class="btn btn-block btn-success">VER</a>
                                </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-6 justify-content-center mb-5" align="">
                        <div class="card m-auto" style="width: 18rem;">
                            <div class="card-body" style="background-color: #5AC3F0">
                            <div id="col-md-10">
                                <div class="caja" style="color:#ffffff"><i class="fas fa-user" id="blanco"></i></div>
                                <div class="caja" style="color:#ffffff">USUARIOS</div>
                            </div>
                            </div>
                            <div class="card-body" id="blanco" style="background-color: #5AC3F0"><div style="color:#ffffff">Revisa los usuarios del sistema<div></div>
                            <div class="card-body" style="background-color: #5AC3F0">
                                <a href="{{-- {{route('login')}} --}}" class="btn btn-block btn-success">VER</a>
                                </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

