<div class="row">
    <div class="form-group{{ $errors->has($text_input) ? ' has-error' : '' }}">
        {!! Form::label($text_label.".:",null,["class"=>"col-md-4 control-label","for"=>$text_input]) !!}
        <div class="col-md-6">
            {!! Form::date($text_input, null,["id"=>$text_input,"class"=>$text_input]) !!}
            @include("errors.message_error",["var"=>$text_input])
        </div>
    </div>
</div>
<br/>