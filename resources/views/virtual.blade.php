@extends('layouts.app')
@section('header')
    <h1 class="">Aula virtual</h1>
@endsection
@section('container')
<div class="card w-75 ml-auto mr-auto">
    <div class="card-header">
        <h6>Seleccione una materia</h6>
    </div>
    <div class="card-body">
        <div class="col-md-6 mb-3">
            <form class="needs-validation" action="{{route('a_virtual')}}" novalidate>
                <label for="validationTooltip04">Materia:</label>
                <select class="custom-select" id="validationTooltip04" required>
                <option selected disabled value="">Choose...</option>
                <option>...</option>
                </select>
                <div class="invalid-tooltip">
                Please select a valid state.
                </div>
                <button class="btn btn-dark mt-3" style="background: teal" type="submit">Crear Aula</button>
            </form>
        </div>
    </div>
</div>
@yield('lista')
@endsection