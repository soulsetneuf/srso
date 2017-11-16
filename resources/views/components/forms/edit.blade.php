<div class="card">
    <!--@include(config("options.card_header"),["title"=>"Editar datos"])-->
    <div class="card-body">
        {!! Form::model($value,['route' => [$path_controller.'.update',$value->id], 'method' => 'put',"files"=>"true","class"=>"form-horizontal"]) !!}
        <fieldset>
            @include($path_view.".form")
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    @include(config("options.button_form"),["class"=>"btn btn-primary","title"=>"Editar"])
                </div>
            </div>
        </fieldset>
        {!! Form::close() !!}
    </div>
</div>