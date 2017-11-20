@extends('layouts.principal')
@section('content')
    <ol class="breadcrumb">
        @include(config("options.breadcrumb_li"),["class"=>"","page"=>"index","id"=>"","title"=>"Inicio"])
        @include(config("options.breadcrumb_li"),["class"=>"active","page"=>"edit","id"=>$value->id,"title"=>"Editar datos"])
    </ol>
    <br>
    @if(Auth::check())

        <div class="card">
            <!--@include(config("options.card_header"),["title"=>"Editar datos"])-->
            <div class="card-body">
                {!! Form::model($value,['route' => [$path_controller.'.update',$value->id], 'method' => 'put',"files"=>"true","class"=>"form-horizontal"]) !!}
                <fieldset>
                    @include($path_view.".form")
                    @include(config("options.input_select"),["text_input"=>"estado","text_label"=>"Estado","array_options"=>config("options.tipo_reserva")])
                    @include(config("options.input_text"),["text_input"=>"anticipo","text_label"=>"Anticipo (Bs)","placeholder"=>"Ejemplo: 10"])
                    @include(config("options.input_text"),["text_input"=>"saldo","text_label"=>"Saldo (Bs)","placeholder"=>"Ejemplo: 10"])


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            @include(config("options.button_form"),["class"=>"btn btn-primary","title"=>"Editar"])
                        </div>
                    </div>
                </fieldset>
                {!! Form::close() !!}
            </div>
        </div>
    @endif
@endsection