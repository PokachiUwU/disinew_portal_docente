@extends('avisos')
@section('b3')
    btn-dark
@endsection
@section('container')
<div class="card w-75 ml-auto mr-auto">
    <div class="card-header">
        Redacte su reseña:
    </div>
    <div class="card-body">
      <form>
        <div class="mb-3">
            <label for="validationTooltip04">Para:</label>
            <select class="custom-select" id="validationTooltip04" required>
                <option selected disabled >Seleccione...</option>
                <option>...</option>
                </select>
        </div>
        <div class="mb-3">
            <label for="titulo">Título del mensaje:</label>
            <input id="titulo" type="text" class="form-control">
        </div>

        <label for="editor">Describa brevemente el mensaje a comunicar:</label>
        <div class="mb-3" id="editor">
          <textarea class="textarea" placeholder="Place some text here"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
        </div>
        <div>
          <label for="inlineRadioOptions">Defina el nivel de atención del mensaje:</label>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <label class="form-check-label" for="inlineRadio1">Normal</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Urgente</label>
          </div>
        </div>
        <button type="button" class="btn btn-dark" style="background: teal">Enviar mensaje</button>
        <button type="button" class="btn btn-dark" style="background: rgb(250, 100, 100)">Cancelar</button>
      </form>
    </div>
</div>
@endsection