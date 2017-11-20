<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservaCreateRequest;
use App\Http\Requests\ReservaUpdateRequest;
use App\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    var $path_view="Reserva";
    var $path_controller="reserva";
    public function index(Request $request)
    {
        $reservas=Reserva::orderBy('created_at', 'desc')->paginate(10);
        return \View::make($this->path_view.'.index',
            [
                "obj"=>$reservas,
                "path_controller"=>$this->path_controller,
                "path_view"=>$this->path_view
            ]
        );
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
    public function store(ReservaCreateRequest $request)
    {
        Reserva::create($request->all());
            return redirect()->route($this->path_controller.".index");
            session()->flash('mensaje', 'Datos insertados correctamente');
            return redirect()->route($this->path_controller.".create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->notFound(Reserva::find($id));
        $this->permiso($this->path_controller.'.'.'show');
        return \View::make($this->path_view.'.show',["obj"=>Reserva::find($id),"path_controller"=>$this->path_controller,"path_view"=>$this->path_view]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \View::make($this->path_view.'.edit',["value"=>Reserva::find($id),"path_controller"=>$this->path_controller,"path_view"=>$this->path_view]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReservaUpdateRequest $request, $id)
    {
        Reserva::find($id)->fill($request->all())->save();
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
        Reserva::destroy($id);
        return redirect($this->path_controller);
    }
    public function redirectIndex()
    {
        return redirect()->route($this->path_controller.".index");
    }
}
