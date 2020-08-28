@extends('layouts.app')
@section('header')
    <h1 class="">Acesorías</h1>
@endsection
@section('container')
<div class="card w-75 ml-auto mr-auto">
    <div class="card-header">
        <h4><strong>n Solicitudes</strong></h4>
    </div>
    <div class="card-body">
        <table class="table table-sm table-striped table-bordered border mb-3 table-hover">
            <thead class="thead text-light" style="background-color: teal">
              <tr>
                <th scope="col"></th>
                <th scope="col">Detalle de la Solicitud</th>
                <th scope="col">Fecha
                    Solicitud</th>
                <th scope="col">Fecha
                    Atención</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection