@extends('layouts.principal')
@section('content')
  <div class="row">
    <div class="col-md-12">

        <form class="form-horizontal">
          <fieldset>

            <!-- Form Name -->
            <legend>Datos del Contacto</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nombre">Nombre Completo</label>  
              <div class="col-md-6">
                <input id="nombre" name="nombre" placeholder="En mayusculas por favor" class="form-control input-md" required="" type="text">
                <span class="help-block">Apellidos primero</span>  
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">Email del contacto</label>  
              <div class="col-md-8">
                <input id="email" name="email" placeholder="ejemplo@servidor.com" class="form-control input-md" required="" type="text">
                <span class="help-block">Asegurese que la cuenta existe</span>  
              </div>
            </div>

            <!-- Multiple Radios -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="tipo contacto">Tipo de observaciones o contacto</label>
              <div class="col-md-4">
                <div class="radio">
                  <label for="tipo contacto-0">
                    <input name="tipo contacto" id="tipo contacto-0" value="queja" checked="checked" type="radio">
                    quejas
                  </label>
                </div>
                <div class="radio">
                  <label for="tipo contacto-1">
                    <input name="tipo contacto" id="tipo contacto-1" value="comentario" type="radio">
                    comentario simple
                  </label>
                </div>
                <div class="radio">
                  <label for="tipo contacto-2">
                    <input name="tipo contacto" id="tipo contacto-2" value="pregunta" type="radio">
                    pregunta
                  </label>
                </div>
                <div class="radio">
                  <label for="tipo contacto-3">
                    <input name="tipo contacto" id="tipo contacto-3" value="otro" type="radio">
                    otros
                  </label>
                </div>
              </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="observaciones">Texto a enviar</label>
              <div class="col-md-4">                     
                <textarea class="form-control" id="observaciones" name="observaciones">Déjenos sus comentarios, en breve lo contactaremos</textarea>
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="enviar">¿Listo?</label>
              <div class="col-md-4">
                <button id="enviar" name="enviar" class="btn btn-primary">Enviar</button>
              </div>
            </div>

          </fieldset>
        </form>

    </div>
    </div>

@stop