@extends('calificaciones.calif')
@section('title')
    - Registro de evaluaciones parciales
@endsection
@section('b1')
    btn-dark
@endsection
@section('container')
<div class="card w-75    ml-auto mr-auto">
    <div class="card-header">
        <h6>Seleccione la siguiente información</h6>
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
                <label for="unidad">Unidad:</label>
                <select class="custom-select" id="unidad" required>
                    <option value="">Seleccionar...</option>
                    <option value="">...</option>
                </select>
                <div class="invalid-tooltip">
                    Please select a valid state.
                </div>
                <label for="seciones">Número de sesiones de la Unidad</label>
                <input class="form-control" min="1" step="1" type="number">
            </form>
        </div>
    </div>
</div>
<div class="card w-75 ml-auto mr-auto">
    <div class="card-header text-center"><i> Nombre de la materia   Unidad   </div>
    <div class="card-body">
        <table class="table table-sm table-bordered">
            <thead class="text-center">
                <tr class="thead-dark">
                    <th colspan="3">Horas efectuadas en la unidad:</th>
                </tr>
                <tr class="text-light" style="background: teal">
                    <th><i class="far fa-clock"></i>Teóricas:</th>
                    <th><i class="far fa-clock"></i>Prácticas en Aula:</th>
                    <th><i class="far fa-clock"></i>Prácticas en Laboratorio:</th>
                </tr>
            </thead>
            <tbody>
            <tr class="text-center">
                <td><input class="form-control-sm" min="0" max="30" step="0" type="number" value="0"></td>
                <td><input class="form-control-sm" min="0" max="30" step="0" type="number" value="0"></td>
                <td><input class="form-control-sm" min="0" max="30" step="0" type="number" value="0"></td>
            </tr>
            </tbody>
        </table>
        <table class="table table-sm text-center table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Matrícula</th>
                    <th>Estudiante</th>
                    @for ($i = 1; $i < 11; $i++)
                        <th>U{{$i}}</th>
                    @endfor
                    <th>Evaluación</th>
                    <th>¿Requiere Tutoria?</th>
                    <th>Faltas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    @for ($i = 0; $i < 10; $i++)
                        <td>-</td>
                    @endfor
                    <td>
                        <select class="custom-select-sm" name="" id="">
                            <option value="">-</option>
                            <option value="">NA</option>
                            <option value="">SA</option>
                            <option value="">DE</option>
                            <option value="">AU</option>
                        </select>
                    </td>
                    <td><input class="form-control-sm" type="checkbox" name="" id=""></td>
                    <td>
                        <input class="form-control-sm w-75" min="0" step="0" type="number" value="" style="">
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection