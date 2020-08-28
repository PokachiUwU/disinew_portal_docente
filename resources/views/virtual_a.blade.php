@extends('virtual')
@section('lista')
<div class="card w-75 ml-auto mr-auto">
    <div class="card-header">
        Aulas virtuales disponibles
    </div>
    <div class="card-body">
        <table class="table table-sm table-striped table-bordered border mb-3 table-hover"> 
            <thead class="thead text-light" style="background-color: teal">
              <tr>
                <th scope="col" class="ic"></th>
                <th scope="col">Nombre del aula</th>
                <th scope="col">Materia</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <center>
                    <i class="fas fa-tv"></i><br>
                    <i class="fas fa-times-circle"></i>
                  </center>
                </td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection