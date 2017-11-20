@extends('layouts.principal')
@section('content')
    <ol class="breadcrumb">
        Menu
    </ol>
    <br>



    <style>
        body {
            padding: 20px;
            font-family: 'Open Sans', sans-serif;
            background-color: #f7f7f7;
        }

        .lib-panel {
            margin-bottom: 20Px;
        }
        .lib-panel img {
            width: 100%;
            background-color: transparent;
        }

        .lib-panel .row,
        .lib-panel .col-md-6 {
            padding: 0;
            background-color: #FFFFFF;
        }


        .lib-panel .lib-row {
            padding: 0 20px 0 20px;
        }

        .lib-panel .lib-row.lib-header {
            background-color: #FFFFFF;
            font-size: 20px;
            padding: 10px 20px 0 20px;
        }

        .lib-panel .lib-row.lib-header .lib-header-seperator {
            height: 2px;
            width: 26px;
            background-color: #d9d9d9;
            margin: 7px 0 7px 0;
        }

        .lib-panel .lib-row.lib-desc {
            position: relative;
            height: 100%;
            display: block;
            font-size: 13px;
        }
        .lib-panel .lib-row.lib-desc a{
            position: absolute;
            width: 100%;
            bottom: 10px;
            left: 20px;
        }

        .row-margin-bottom {
            margin-bottom: 20px;
        }

        .box-shadow {
            -webkit-box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
            box-shadow: 0 0 10px 0 rgba(0,0,0,.10);
        }

        .no-padding {
            padding: 0;
        }
    </style>

    @if(Auth::check())
        <div class="card">
            <div class="card-body">
                <div class="block-flat">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                @include(config("options.button_generic"),["action"=>"create","text"=>"Nuevo menu"])
                            </div>
                        </div>
                        <div class="content">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="no-border">
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre</th>
                                        <th>Precio unitario</th>
                                        <th>Descripción</th>
                                        <th>Servicio</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody class="no-border-y">
                                    @foreach($obj as $i => $row)
                                        <tr>
                                            <td>{{ (($obj->currentPage() - 1 ) * $obj->perPage() ) + $i + 1 }}</td>
                                            <td>{{ $row->nombre }}</td>
                                            <td>{{ $row->precio_unitario }}</td>
                                            <td>{{ $row->descripcion }}</td>
                                            <td>{{ $row->servicio->nombre }}</td>
                                            <td>
                                                @include(config("options.button_group_actions"),["id"=>$row->id])
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {!! $obj->render() !!}
                        <div class="posts">
                            Existen {{ $obj->total() }} registros
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row row-margin-bottom">
                @foreach($obj as $i => $row)
                    <div class="col-md-5 no-padding lib-item" data-category="view">
                        <div class="lib-panel">
                            <div class="row box-shadow">
                                <div class="col-md-6">
                                    <img class="lib-img-show" src="{{asset("uploads")."/".$row->imagen->ruta_completa}}">
                                </div>
                                <div class="col-md-6">
                                    <div class="lib-row lib-header">
                                        {{$row->servicio->nombre}} <br/>
                                        {{$row->nombre}}
                                        <div class="lib-header-seperator"></div>
                                    </div>
                                    <div class="lib-row lib-desc">
                                        Precio: {{$row->precio_unitario}}<br/>
                                        Descripción:{{$row->descripcion}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
