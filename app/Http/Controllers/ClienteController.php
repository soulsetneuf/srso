<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Http\Requests\ClienteCreateRequest;
use App\Http\Requests\ClienteUpdateRequest;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    var $path_view="Cliente";
    var $path_controller="cliente";
    public function index(Request $request)
    {
        $clientes=Cliente::paginate(10);
        return \View::make($this->path_view.'.index',
            [
                "obj"=>$clientes,
                "path_controller"=>$this->path_controller,
                "path_view"=>$this->path_view
            ]
        );
        /*
        $ci=$request->get("ci");
        $nombre=$request->get("nombre");
        $apellido_paterno=$request->get("apellido_paterno");
        $apellido_materno=$request->get("apellido_materno");
        return \View::make($this->path_view.'.index',
            [
                "obj"=>Cliente::ci($ci)->nombre($ci)->paterno($ci)->materno($ci)->sexo($ci)->paginate(10),
                "path_controller"=>$this->path_controller,
                "path_view"=>$this->path_view,
                "ci"=>$ci,
                "nombre"=>$nombre,
                "apellido_paterno"=>$apellido_paterno,
                "apellido_materno"=>$apellido_materno,
                //compact('calendar')
            ]
        );*/
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \View::make($this->path_view.'.register', ["path_controller"=>$this->path_controller,"path_view"=>$this->path_view]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteCreateRequest $request)
    {
        Cliente::create($request->all());
        return redirect()->route($this->path_controller.".index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->notFound(Cliente::find($id));
        $this->permiso($this->path_controller.'.'.'show');
        return \View::make($this->path_view.'.show',["obj"=>Cliente::find($id),"path_controller"=>$this->path_controller,"path_view"=>$this->path_view]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \View::make($this->path_view.'.edit',["value"=>Cliente::find($id),"path_controller"=>$this->path_controller,"path_view"=>$this->path_view]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteUpdateRequest $request, $id)
    {
        Cliente::find($id)->fill($request->all())->save();
        return redirect()->route($this->path_controller.".index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->permiso($this->path_controller.'.'.'destroy');
        Cliente::destroy($id);
        return redirect($this->path_controller);
    }
    public function redirectIndex()
    {
        return redirect()->route($this->path_controller.".index");
    }
}
