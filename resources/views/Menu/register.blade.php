@extends('layouts.principal')
@section('content')
    <link href="{{ URL::asset('css/dropzone.css') }}" rel="stylesheet">

    <ol class="breadcrumb">
        @include(config("options.breadcrumb_li"),["class"=>"","page"=>"index","id"=>"","title"=>"Inicio"])
        @include(config("options.breadcrumb_li"),["class"=>"active","page"=>"create","id"=>"","title"=>"Registrar menu"])
    </ol>
    <br>
    @if(Auth::check())
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => $path_controller.'.store', 'method' => 'post', "files"=>true,"class"=>"form-horizontal"]) !!}
            <fieldset>
                @include($path_view.".form")
                <div class="form-group">
                    {!! Form::label("Imagen".".:",null,["class"=>"col-md-4 control-label","for"=>"Imagen"]) !!}
                    <div class="col-md-4 control-label">
                        {!! Form::file('file') !!}
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">@include("errors.message_error",["var"=>'file'])</div>
                </div>

                <div class="form-group">
                    <div class="col-md-1"></div>
                    <div class="col-md-4 control-label">
                        @include(config("options.button_form"),["class"=>"btn btn-primary","title"=>"Registrar"])
                    </div>
                </div>
            </fieldset>
            {!! Form::close() !!}
        </div>
    </div>
    @endif
@endsection