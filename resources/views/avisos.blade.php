@extends('layouts.app')
@section('header')
    <h1 class="">Envie un mensaje a sus estudiantes</h1>
@endsection
@section('sideheader')
    <a href="{{route('grupal')}}">
        <button class="btn btn-light @yield('b3') ml-1 mr-1 float-right">Por grupo</button>
    </a>
    <a href="{{route('estudiante')}}">
        <button class="btn btn-light @yield('b2') ml-1 mr-1 float-right">Por estudiante</button>
    </a>
    <a href="{{route('enviados')}}">
        <button class="btn btn-light @yield('b1') ml-1 mr-1 float-right">Enviados</button>
    </a>
@endsection
