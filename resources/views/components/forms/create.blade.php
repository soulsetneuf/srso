<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => $path_controller.'.store', 'method' => 'post', "files"=>true,"class"=>"form-horizontal"]) !!}
        <fieldset>
            @include($path_view.".form")
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    @include(config("options.button_form"),["class"=>"btn btn-primary","title"=>"Registrar"])
                </div>
            </div>
        </fieldset>
        {!! Form::close() !!}
    </div>
</div>