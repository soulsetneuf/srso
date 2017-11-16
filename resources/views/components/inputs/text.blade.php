@if(!isset($class) )
    <?php $class="form-control input-md" ?>
@endif
@if(!isset($placeholder) )
    <?php $placeholder="" ?>
@endif

<div class="form-group">
    {!! Form::label($text_label.".:",null,["class"=>"col-md-4 control-label","for"=>$text_input]) !!}
    <div class="col-md-6">
        {!! Form::text($text_input,null,["id"=>$text_input,"placeholder"=>$placeholder,"class"=>$class,"required"=>true,"autofocus"=>true])!!}
        @include("errors.message_error",["var"=>$text_input])
    </div>
</div>
<br/>