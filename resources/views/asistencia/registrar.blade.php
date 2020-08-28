@extends('asistencia.registro')
@section('encabezado')
    <div class="ml-auto mr-auto text-center">
        <h3><i>Materia y Día seleccionados:</i></h3>
        <p class=>
            <h4><i>Materia: </i></h4>
            <h4><i>Día: </i></h4>
        </p>
        <a href="{{route('asis_regis')}}"><button class="btn btn-dark" type="button">Borrar Asistencia</button></a>
        <p class=" m-auto">A = Asistencia     I = Inasistencia     R = Retardo     J = Justificante     P = Permiso</p>
    </div>
@endsection
@section('lista')
    <table class="table table-sm table-bordered">
        <thead class="table-dark">
            <tr>
                <th scope="col">Matricula</th>
                <th scope="col">Alumno</th>
                <th scope="col">Asistencia</th>
                <th scope="col">Registro</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <select name="" id="">
                        <option value="">A</option>
                        <option value="">I</option>
                        <option value="">R</option>
                        <option value="">J</option>
                        <option value="">P</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>
    <button class="btn btn-dark" style="background: teal" type="submit">Registrar asistencia</button>
@endsection