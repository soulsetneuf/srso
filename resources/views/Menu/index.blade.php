@extends('layouts.principal')
@section('content')
    <ol class="breadcrumb">
        Menu
    </ol>
    <br>
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
@endsection
