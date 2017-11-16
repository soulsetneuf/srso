<div class="container">
    <div class="row">
        <div id="{{$modal}}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <!--<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>-->
                        <div class="row">
                            <div class="col-lg-10">
                                <h4 id="modalTitle" class="modal-title">{{$title}}</h4>
                            </div>
                            <div class="col-md-2">
                                    {!! Form::open(['route' => array("feriado.eliminar")]) !!}
                                    @include(config("options.button_form"),["class"=>"btn btn-danger","title"=>"Eliminar"])
                                    {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                    <div id="modalBody" class="modal-body">
                     @if ($type == 'Guardar')
                         {!! Form::open(['route' => $path_controller.'.store', 'method' => 'post', "files"=>true]) !!}
                     @endif
                     @if ($type == 'Actualizar')
                         {!! Form::open(['route' => array("feriado.actualizar")]) !!}
                     @endif
                         @include($path_view.".form")
                    </div>
                    <div class="modal-footer">
                        <div class="row">
                                <button type="button" class="btn btn-" data-dismiss="modal" id="btn-close-modal">Cerrar</button>
                                @include(config("options.button_form"),["class"=>"btn btn-primary","title"=>$type])
                                {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>