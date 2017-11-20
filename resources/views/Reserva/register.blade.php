@extends('layouts.principal')
@section('content')
    <ol class="breadcrumb">
        @include(config("options.breadcrumb_li"),["class"=>"","page"=>"index","id"=>"","title"=>"Inicio"])
        @include(config("options.breadcrumb_li"),["class"=>"active","page"=>"create","id"=>"","title"=>"Registrar reserva"])
    </ol>
    <div class="container">
        @if(session()->has('mensaje'))
            <div class="alert alert-info alert-dismissable">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                {{session()->get("mensaje")}}
            </div>
        @endif
    </div>
    <br>
    @include(config("options.form_create"))
@endsection
