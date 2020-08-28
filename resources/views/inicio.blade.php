@extends('layouts.app')
@section('header')
    <h1 class="">Inicio</h1>
@endsection
@section('container')
    <div class="card w-75 ml-auto mr-auto">
        <div class="card-header">
            <div class="col col-md-2">
                <img src="{{asset('dist/img/avatar.png')}}" class="img-circle float-left img-size-64 mr-3" alt=" ">
            </div>
            <div class="col">
                <h4 class="mt-auto"><strong>Bienvenido</strong></h4>
                <h5>Nombre del docente</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="text-center">
                <em>Impartición de clases</em>
            </div>
            <table class="table table-sm table-striped border mb-3 table-hover">
                <thead class="thead text-light" style="background-color: teal">
                  <tr>
                    <th scope="col">Asignaturas</th>
                    <th scope="col">Grupos</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>SISTEMA DE INVESTIGACION DE MERCADO I<br>
                        <article class="small"><strong>Carrera: </strong> Desarrollo de Negocios Área Mercadotecnia Plan Normal</article> 
                    </td>
                    <td>DNE2-1,DNE2-2, DNE2-3</td>
                  </tr>
                </tbody>
            </table>
            <div class="text-center text-bold">
                <em>Opciones Académicas</em>
            </div>
            <div class="row row-cols-1 row-cols-md-5 container-fluid">
            <a class="col" href="{{route('acesorias')}}">
                    <button type="button" class="btn bg-gradient-white">
                        <i class="fas fa-chalkboard-teacher fa-3x" style="color: teal"></i><br>
                        <p class="text-center">Acesorías</p>
                    </button>
                </a>
                <a class="col" href="{{route('asis_regis')}}">
                    <button type="button" class="btn bg-gradient-white">
                        <i class="fas fa-user-check fa-3x" style="color: teal"></i><br>
                        <p class="text-center">Asistencia</p>
                    </button>
                </a>
            <a class="col" href="{{route('virtual')}}">
                    <button type="button" class="btn bg-gradient-white">
                        <i class="fas fa-video fa-3x" style="color: teal"></i><br>
                        <p class="text-center">Aula virtual</p>
                    </button>
                </a>
                <a class="col" href="{{route('enviados')}}">
                    <button type="button" class="btn bg-gradient-white">
                        <i class="fas fa-envelope fa-3x" style="color: teal"></i><br>
                        <p class="text-center">Avisos</p>
                    </button>
                </a>
                <a class="col" href="{{route('calendario')}}">
                    <button type="button" class="btn bg-gradient-white">
                        <i class="fas fa-calendar-alt fa-3x" style="color: teal"></i><br>
                        <p class="text-center">Calendario</p>
                    </button>
                </a>
                <a class="col" href="{{route('calif_regis')}}">
                    <button type="button" class="btn bg-gradient-white">
                        <i class="fas fa-tasks fa-3x" style="color: teal"></i><br>
                        <p class="text-center">Calificiones</p>
                    </button>
                </a>
                <a class="col" href="{{route('grupos')}}">
                    <button type="button" class="btn bg-gradient-white">
                        <i class="fas fa-users fa-3x" style="color: teal"></i><br>
                        <p class="text-center">Grupos</p>
                    </button>
                </a>
                <a class="col" href="{{route('plan')}}">
                    <button type="button" class="btn bg-gradient-white">
                        <i class="fas fa-chalkboard fa-3x" style="color: teal"></i><br>
                        <p class="text-center">Plan de clases</p>
                    </button>
                </a>
                <a class="col" href="{{route('presentacion')}}">
                    <button type="button" class="btn bg-gradient-white">
                        <i class="fas fa-address-card fa-3x" style="color: teal"></i><br>
                        <p class="text-center">Presentación</p>
                    </button>
                </a>
                <a class="col" href="{{route('tareas')}}">
                    <button type="button" class="btn bg-gradient-white">
                        <i class="fas fa-book fa-3x" style="color: teal"></i><br>
                        <p class="text-center">Tareas</p>
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection