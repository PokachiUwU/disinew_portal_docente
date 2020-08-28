@extends('grupos')
@section('lista')
    <div class="row text-light mx-auto" style="background-color: teal">
        <div class="col align-self-center">Estudiantes activos: 0</div>
        <div class="col align-self-center">Estudiantes dados de Baja: 0</div>
        <div class="col align-self-center">Estudiantes Egresados: 0</div>
    </div>
    <table class="table table-sm table-striped mt-3">
        <thead class="text-light" style="background-color: teal">
            <th>Matrícula</th>
            <th>Estudiante</th>
            <th>Teléfono
                Particular</th>
            <th>Teléfono
                Celular</th>
            <th>Correo
                Electrónico</th>
            <th>Estatus</th>
        </thead>
        <tbody>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tbody>
    </table>
@endsection