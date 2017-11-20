@if(!isset($class) )
    <?php $class="form-control input-md" ?>
@endif
@if(!isset($placeholder) )
    <?php $placeholder="" ?>
@endif

<div class="form-group">
    {!! Form::label($text_label.".:",null,["class"=>"col-md-4 control-label","for"=>$text_input]) !!}
    <div class="col-md-6">
        <input type="time" name="{{$text_input}}" value="09:00:00"/>
        @include("errors.message_error",["var"=>$text_input])
    </div>
</div>
<br/>