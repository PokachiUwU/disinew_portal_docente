@extends('layouts.app')
@section('header')
    <h1 class="">Asistencia @yield('title')</h1>
@endsection
@section('sideheader')
    <a href="{{route('asis_cons')}}">
        <button class="btn btn-light @yield('b2') ml-1 mr-1 float-right">Consultar</button>
    </a>
    <a href="{{route('asis_regis')}}">
        <button class="btn btn-light @yield('b1') ml-1 mr-1 float-right">Registrar</button>
    </a>
@endsection