@extends('asistencia.asist')
@section('title')
    - Consulta
@endsection
@section('b2')
    btn-dark
@endsection
@section('container')
<div class="card w-75 ml-auto mr-auto">
    <div class="card-header">
        <h4>Seleccione una materia y el perido</h4>
    </div>
    <div class="card-body">
        <div class="col-md-7 mb-3">
            <form class="needs-validation" action="{{route('a_consultar')}}" novalidate>
                <label for="validationTooltip04">Materia:</label>
                <select class="custom-select" id="validationTooltip04" required>
                <option selected disabled value="">Seleccione...</option>
                <option>...</option>
                </select>
                <div class="invalid-tooltip">
                    Please select a valid state.
                </div>
                <label for="validationTooltip04">Periodo:</label>
                <select class="custom-select" id="validationTooltip04" required>
                <option selected disabled value="">Seleccione...</option>
                <option>...</option>
                </select>
                <div class="invalid-tooltip">
                    Please select a valid state.
                </div>
                <div class="form-row">
                    <div class="col-md-4">
                        <label for="validationTooltip04">Mes:</label>
                        <select class="custom-select" id="validationTooltip04" required>
                        <option selected disabled value="">Seleccione...</option>
                        <option>...</option>
                        </select>
                        <div class="invalid-tooltip">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 m-auto">
                        <button class="btn btn-dark mt-3" style="background: teal" type="submit">Ver asistencia</button>
                    </div>
                    <div class="col-md-3 m-auto">
                        <button class="btn btn-dark mt-3" style="background: teal" type="submit">Imprimir</button>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</div>
@yield('lista')
@endsection
