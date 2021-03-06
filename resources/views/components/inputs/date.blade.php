@if(!isset($class) )
    <?php $class="form-control input-md" ?>
@endif
@if(!isset($placeholder) )
    <?php $placeholder="" ?>
@endif

<div class="form-group">
    {!! Form::label($text_label.".:",null,["class"=>"col-md-4 control-label","for"=>$text_input]) !!}
    <div class="col-md-6">
        {!! Form::date($text_input, null,[
        "id"=>$text_input,
        "class"=>$text_input,
        "min"=>\Carbon\Carbon::now()->format('Y-m-d'),
        "max"=>\Carbon\Carbon::now()->addMonths(6)->format('Y-m-d')
        ]) !!}
        @include("errors.message_error",["var"=>$text_input])
    </div>
</div>
<br/>