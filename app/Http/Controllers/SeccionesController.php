<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seccion as Seccion;
class SeccionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $secciones = Seccion::all();
        return \View::make('desarrollosocial.secciones.index', compact('secciones'));
    }

    public function search(Request $request)
    {
         $secciones = Seccion::where('id_seccion','like','%'.$request->id_seccion.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('desarrollosocial.secciones.index',compact('secciones'));
    }

    public function create()
    {
        return \View::make('desarrollosocial.secciones.create');
    }

    
    public function store(Request $request)
    {
        $secciones = new Seccion;

        $secciones->id_seccion = $request->id_seccion;
        $secciones->nombreseccion = $request->nombreseccion;
        
        $secciones->save();

        return redirect('desarrollosocial/secciones');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $secciones = Seccion::find($id);
        return view ('desarrollosocial.secciones.update',["secciones" => $secciones]);
    }

    public function update(Request $request, $id)
    {
        $secciones = Seccion::find($id);;

        $secciones->id_seccion = $request->id_seccion;
        $secciones->nombreseccion = $request->nombreseccion;
        
        if($secciones->save())
        {
            return redirect("/desarrollosocial/secciones");
        }
        else{
            return view("desarrollosocial/secciones.edit", ["secciones" => $secciones]);
        }
    }

    public function destroy($id)
    {
        $secciones = Seccion::find($id);
        $secciones->delete();
        return redirect()->back();
    }
}
