@extends('asistencia.asist')
@section('title')
    - Regristro
@endsection
@section('b1')
    btn-dark
@endsection
@section('container')
<div class="card w-75 ml-auto mr-auto">
    <div class="card-header">
        <h4>Seleccione una materia y un día</h4>
    </div>
    <div class="card-body">
        <form class="needs-validation" novalidate action="{{route('a_registrar')}}">
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationTooltip04">Materia:</label>
                <select class="custom-select" id="validationTooltip04" required>
                    <option selected disabled >Seleccione...</option>
                    <option>...</option>
                    </select>
                    <div class="invalid-tooltip">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="date">Día de registro de asistencia:</label>
                <input class="form-control" id="date" type="date" required>
                </div>
                <div class="col-md-2 m-auto">
                    <button class="btn btn-dark" style="background: teal" type="submit">Ver Lista</button>
                </div>
            </div>
            
        </form>   
    </div>
</div>
@yield('encabezado')<br>
@yield('lista')
@endsection