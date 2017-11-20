@extends('layouts.principal')
@section('content')
    <ol class="breadcrumb">
        @include(config("options.breadcrumb_li"),["class"=>"","page"=>"index","id"=>"","title"=>"Inicio"])
        @include(config("options.breadcrumb_li"),["class"=>"active","page"=>"edit","id"=>$value->id,"title"=>"Editar datos"])
    </ol>
    <br>
    @if(Auth::check())
        @include(config("options.form_edit"))
    @endif
@endsection