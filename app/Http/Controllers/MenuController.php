<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuCreateRequest;
use App\Http\Requests\MenuUpdateRequest;
use App\Imagen;
use App\Menu;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    var $path_view="Menu";
    var $path_controller="menu";
    public function index(Request $request)
    {
        $menus=Menu::paginate(10);
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
    public function store(MenuCreateRequest $request)
    {
            $fileInput=$request->file('file');
            $fileName=date('Y_m_d_H_i_s_').random_int(1, 1000);
            $path=public_path().'\\uploads\\';
            $fileType=$fileInput->guessExtension();
            $fileSize=$fileInput->getClientSize()/1024;
            $imagen=new Imagen();
            $imagen->nombre=$fileName;
            $imagen->ruta=$path;
            $imagen->tipo=$fileType;
            $imagen->tamaño=$fileSize;
            $id="";
            if($fileInput->move($path,$fileName.'.'.$fileInput->guessExtension()))
            {
                $id=$imagen->save();
                $id=$imagen->id;
                $request->merge([ 'id_imagen' => $id]);
            }
        Menu::create($request->all());
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
        $this->notFound(Menu::find($id));
        $this->permiso($this->path_controller.'.'.'show');
        return \View::make($this->path_view.'.show',["obj"=>Menu::find($id),"path_controller"=>$this->path_controller,"path_view"=>$this->path_view]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return \View::make($this->path_view.'.edit',["value"=>Menu::find($id),"path_controller"=>$this->path_controller,"path_view"=>$this->path_view]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuUpdateRequest $request, $id)
    {
        Menu::find($id)->fill($request->all())->save();
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
        Menu::destroy($id);
        return redirect($this->path_controller);
    }
    public function redirectIndex()
    {
        return redirect()->route($this->path_controller.".index");
    }
}
