@extends('layouts.principal')
@section('content')
    <ol class="breadcrumb">
        @include(config("options.breadcrumb_li"),["class"=>"","page"=>"index","id"=>"","title"=>"Inicio"])
        @include(config("options.breadcrumb_li"),["class"=>"active","page"=>"create","id"=>"","title"=>"Registrar servicio"])
    </ol>
    <br>
        @include(config("options.form_create"))
@endsection