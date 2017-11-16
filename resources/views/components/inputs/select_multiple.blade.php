<div class="row">
    <div class="form-group{{ $errors->has($text_input) ? ' has-error' : '' }}">
        {!! Form::label($text_label.".:",null,["class"=>"col-md-4 control-label","for"=>$text_input]) !!}
        <div class="col-md-6">
            {!! Form::select($text_input,$array_options,null,["class"=>"form-control","id"=>substr($text_input, 0, strlen($text_input)-2),"multiple"=>"multiple","required"=>$required]) !!}
            @include("errors.message_error",["var"=>$text_input])
        </div>
    </div>
</div>
<br/>