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
                            @include(config("options.button_generic"),["action"=>"create","text"=>"Nueva reserva"])
                        </div>
                    </div>
                    <div class="content">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="no-border">
                                <tr>
                                    <th>#</th>
                                    <th>Cliente</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Cantidad</th>
                                    <th>Descripcion</th>
                                    <th>Anticipo</th>
                                    <th>Saldo</th>
                                    <th>Total</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody class="no-border-y">
                                @foreach($obj as $i => $row)
                                    <tr>
                                        <td>{{ (($obj->currentPage() - 1 ) * $obj->perPage() ) + $i + 1 }}</td>
                                        <td>{{ $row->cliente->nombre_completo }}</td>
                                        <td>{{ $row->fecha }}</td>
                                        <td>{{ $row->hora }}</td>
                                        <td>{{ $row->cantidad }}</td>
                                        <td>{{ $row->descripcion }}</td>
                                        <td>{{ $row->anticipo }}</td>
                                        <td>{{ $row->saldo }}</td>
                                        <td>{{ $row->total }}</td>
                                        <td>{{ $row->estado }}</td>
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