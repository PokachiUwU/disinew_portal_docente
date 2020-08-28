@extends('layouts.app')
@section('header')
    <h1 class="">Grupos</h1>
@endsection
@section('container')
<div class="card w-75 ml-auto mr-auto">
    <div class="card-header">
        <h4>Seleccione un grupo</h4>
    </div>
    <div class="card-body">
        <div class="col-md-6 mb-3">
            <form class="needs-validation" novalidate action="{{route('g_lista')}}">
                <label for="validationTooltip04">Grupo:</label>
                <select class="custom-select" id="validationTooltip04" required>
                <option selected disabled value="">Seleccione...</option>
                <option>...</option>
                </select>
                <div class="invalid-tooltip">
                Please select a valid state.
                </div>
                <button class="btn btn-dark mt-3" style="background: teal" type="submit">Ver grupo</button>
            </form>
        </div>
    </div>
</div>

@yield('lista')
@endsection