@extends('layouts.app')
@section('header')
    <h1 class="">Reseña curricular del docente</h1>
@endsection
@section('container')
    <div class="card w-75 ml-auto mr-auto">
        <div class="card-header">
           Edite su foto de perfil y redacte su reseña curricular.
        </div>
        <div class="card-body">
            <form action="">
                <label for="foto">Agregar foto de perfil</label>
                <div class="row" id="foto">
                    <div class="col col-md-2">
                    <img class="" src="{{asset('dist/img/user2-160x160.jpg')}}"  style="max-height: 150px; max-width: 111px"></img>
                    </div>
                    <div class="mt-auto mb-auto ml-3">
                        <div class="mb-3">
                            <input type="file" name="" id="">
                        </div>
                        <div >
                            <button type="button" class="btn btn-success mr-3" style="background: teal">Guardar</button>
                            <button type="button" class="btn btn-light">Cancelar</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="mb-5 mt-3">
                <form action="">
                <label for="editor">Introduzca brevemente su reseña curricular</label>
                <div class="mb-3" id="editor">
                <textarea class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
               
                <div class="col text-center">
                    <button type="button" class="btn btn-success" style="background: teal">Guardar</button>
                    <button type="button" class="btn btn-light">Cancelar</button>
                </div>
                </form>
            </div>  
        </div>
    </div>
@endsection