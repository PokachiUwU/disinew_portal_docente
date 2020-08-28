@extends('layouts.app')
@section('header')
    <h1 class="">Tareas</h1>
@endsection
@section('sideheader')
    <a>
        <button class="btn btn-light ml-1 mr-1 float-right">Por grupo</button>
    </a>
    <a>
        <button class="btn btn-light ml-1 mr-1 float-right">Por estudiante</button>
    </a>
    <a>
        <button class="btn btn-dark ml-1 mr-1 float-right">Enviadas</button>
    </a>
    <a>
        <button class="btn btn-dark ml-1 mr-1 float-right">Recibidas</button>
    </a>
@endsection