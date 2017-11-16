@extends('layouts.principal')
@section('content')
    <ol class="breadcrumb">
        @include(config("options.breadcrumb_li"),["class"=>"","page"=>"index","id"=>"","title"=>"Inicio"])
        @include(config("options.breadcrumb_li"),["class"=>"active","page"=>"create","id"=>"","title"=>"Registrar nuevo menu"])
    </ol>
    <br>
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => $path_controller.'.store', 'method' => 'post', "files"=>true]) !!}
            @include($path_view.".form")
            <div class="form-group">
                @include(config("options.button_form"),["class"=>"btn btn-primary","title"=>"Registrar"])
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="col-lg-12"></div>
@endsection