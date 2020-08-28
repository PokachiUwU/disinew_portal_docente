@extends('layouts.app')
@section('header')
    <h1 class="">Calificaciones @yield('title')</h1>
@endsection
@section('sideheader')
    <a href="{{route('calif_asis')}}">
        <button class="btn btn-light @yield('b3') ml-1 mr-1 float-right">Lista de asistencia</button>
    </a>
    <a href="{{route('calif_actas')}}">
        <button class="btn btn-light @yield('b2') ml-1 mr-1 float-right">Imprimir actas</button>
    </a>
    <a href="{{route('calif_regis')}}">
        <button class="btn btn-light @yield('b1') ml-1 mr-1 float-right">Registrar</button>
    </a>
@endsection