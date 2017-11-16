{!! Form::open(['route' => $path_controller.'.index', 'method' => 'GET']) !!}
<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-6">
        @if(is_null($ci))
            {!! Form::text("ci",null,["id"=>"ci","class"=>"form-control","placeholder"=>$placeholder,"autofocus"=>true])!!}
        @else
            {!! Form::text("ci",$ci,["id"=>"ci","class"=>"form-control","placeholder"=>"placeholder"=>$placeholder])!!}
        @endif
    </div>
    <div class="col-md-2">
        <button type="submit" class="btn btn-primary">Buscar</button>
    </div>
</div>
{!! Form::close() !!}