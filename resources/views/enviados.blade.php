@extends('avisos')
@section('b1')
    btn-dark
@endsection
@section('container')
<div class="card w-75 ml-auto mr-auto">
    <div class="card-header">
        <h4><strong>n mensajes enviados</strong></h4>
    </div>
    <div class="card-body">
        <table class="table table-sm table-striped table-bordered border mb-3 table-hover">
            <thead class="thead text-light" style="background-color: teal">
              <tr>
                <th scope="col"></th>
                <th scope="col">Tarea</th>
                <th scope="col">Enviado a</th>
                <th scope="col">Fecha de envio</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><center><i class="fas fa-envelope-open-text"></i></center></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection