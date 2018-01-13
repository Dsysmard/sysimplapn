<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado as Estado;
class EstadosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $estados = Estado::all();
        return \View::make('desarrollosocial.estados.index', compact('estados'));
    }

    public function search(Request $request){
         $estados = Estado::where('id_estado','like','%'.$request->id_estado.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('desarrollosocial.estados.index',compact('estados'));
    }

    public function create()
    {
        return \View::make('desarrollosocial.estados.create');
    }

    public function store(Request $request)
    {
        $estado = new Estado;

        $estado->id_estado = $request->id_estado;
        $estado->nombreestado = $request->nombreestado;
        
        $estado->save();

        return redirect('desarrollosocial/estados');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
         $estado = Estado::find($id);
        return view ('desarrollosocial.estados.update',["estado" => $estado]);
    }

    public function update(Request $request, $id)
    {
        $estado = Estado::find($id);;

        $estado->id_estado = $request->id_estado;
        $estado->nombreestado = $request->nombreestado;
        
        if($estado->save())
        {
            return redirect("/desarrollosocial/estados");
        }
        else{
            return view("desarrollosocial/estados.edit", ["estado" => $estado]);
        }
    }

    public function destroy($id)
    {
        $estados = Estado::find($id);
        $estados->delete();
        return redirect()->back();
    }
}
