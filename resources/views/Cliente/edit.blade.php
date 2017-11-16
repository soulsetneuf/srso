@extends('layouts.principal')
@section('content')
    <ol class="breadcrumb">
        @include(config("options.breadcrumb_li"),["class"=>"","page"=>"index","id"=>"","title"=>"Inicio"])
        @include(config("options.breadcrumb_li"),["class"=>"active","page"=>"edit","id"=>$value->id,"title"=>"Editar datos del cliente"])
    </ol>
    <br>
    <div class="card">
        <!--@include(config("options.card_header"),["title"=>"Editar datos"])-->
        <div class="card-body">
            {!! Form::model($value,['route' => [$path_controller.'.update',$value->id], 'method' => 'put',"files"=>"true"]) !!}
            @include($path_view.".form")
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    @include(config("options.button_form"),["class"=>"btn btn-primary","title"=>"Editar"])
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="col-lg-12"></div>
@endsection