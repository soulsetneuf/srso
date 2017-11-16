@if(!isset($class) )
    <?php $class="form-control" ?>
@endif
@if(!isset($placeholder) )
    <?php $placeholder="" ?>
@endif

<div class="form-group">
    <label class="col-md-4 control-label" for="{{$text_input}}">{{$text_label}}</label>
    <div class="col-md-4">
        {{ Form::textarea($text_input,null,["class"=>"form-control","id"=>$text_input,"name"=>$text_input,"placeholder"=>$placeholder]) }}
        @include("errors.message_error",["var"=>$text_input])
    </div>
</div>