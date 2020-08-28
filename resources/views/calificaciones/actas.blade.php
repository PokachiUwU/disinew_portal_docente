@extends('calificaciones.calif')
@section('title')
    - Impresión de actas de evaluación
@endsection
@section('b2')
    btn-dark
@endsection
@section('container')
<div class="card w-75 ml-auto mr-auto">
    <div class="card-header">
        <h4>Seleccione una materia</h4>
    </div>
    <div class="card-body">
        <div class="col-md-6 mb-3">
            <form class="needs-validation" novalidate>
                <label for="validationTooltip04">Materia:</label>
                <select class="custom-select" id="validationTooltip04" required>
                <option selected disabled value="">Seleccionar...</option>
                <option>...</option>
                </select>
                <div class="invalid-tooltip">
                Please select a valid state.
                </div>
                <button class="btn btn-dark mt-3" style="background: teal" type="submit">Acta final</button>
                <button class="btn btn-dark mt-3" style="background: teal" type="submit">Acta extraordinaria</button>
            </form>
        </div>
    </div>
</div>
@endsection