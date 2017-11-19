<?php

namespace App\Http\Controllers;

use App\Facades\InputForm;
use App\Http\Requests\ImagenCreateRequest;
use App\Http\Requests\ImagenUpdateRequest;
use App\Imagen;
use DebugBar\DebugBar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class ImagenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    var $path_view="Imagen";
    var $path_controller="imagen";
    public function index(Request $request)
    {
        $menus=Imagen::paginate(10);
        return \View::make($this->path_view.'.index',
            [
                "obj"=>$menus,
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
    public function store(ImagenCreateRequest $request)
    {
        $fileInput=$request->file('file');
        if(Input::hasFile('file'))
        {
            $fileName=Hash::make($fileInput->getClientOriginalName());
            $path=public_path().'\\uploads\\';
            $fileType=$fileInput->guessExtension();
            $fileSize=$fileInput->getClientSize()/1024;

            $imagen=new Imagen();
            $imagen->nombre=$fileName;
            $imagen->ruta=$path;
            $imagen->tipo=$fileType;
            $imagen->tamaño=$fileSize;
            if($fileInput->move($path,$fileName.'.'.$fileInput->guessExtension()))
            {
                $imagen->save();
            }
        }
    }
    public function storeimagen()
    {
        $fileInput=Input::file('file');
        if(Input::hasFile('file'))
        {
            $fileName=Hash::make($fileInput->getClientOriginalName());
            $path=public_path("uploads\\");
            $fileType=$fileInput->guessExtension();
            $fileSize=$fileInput->getClientSize()/1024;

            $imagen=new Imagen();
            $imagen->nombre=$fileName;
            $imagen->ruta=$path;
            $imagen->tipo=$fileType;
            $imagen->tamaño=$fileSize;
            if($fileInput->move($path,$fileName.'.'.$fileInput->guessExtension()))
            {
                $imagen->save();
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->notFound(Imagen::find($id));
        $this->permiso($this->path_controller.'.'.'show');
        return \View::make($this->path_view.'.show',["obj"=>Imagen::find($id),"path_controller"=>$this->path_controller,"path_view"=>$this->path_view]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \View::make($this->path_view.'.edit',["value"=>Imagen::find($id),"path_controller"=>$this->path_controller,"path_view"=>$this->path_view]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImagenUpdateRequest $request, $id)
    {
        Imagen::find($id)->fill($request->all())->save();
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
        Imagen::destroy($id);
        return redirect($this->path_controller);
    }
    public function redirectIndex()
    {
        return redirect()->route($this->path_controller.".index");
    }
}
