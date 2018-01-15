<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apoyo as Apoyo;
class ApoyosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $apoyos = Apoyo::all();
        return \View::make('desarrollosocial.apoyos.index', compact('apoyos'));
    }

    public function search(Request $request){
         $apoyos = Apoyo::where('id_apoyo','like','%'.$request->id_apoyo.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('desarrollosocial.apoyos.index',compact('apoyos'));
    }

    public function create()
    {
        return \View::make('desarrollosocial.apoyos.create');
    }

    public function store(Request $request)
    {
        $apoyo = new Apoyo;

        $apoyo->id_apoyo = $request->id_apoyo;
        $apoyo->nombreapoyo = $request->nombreapoyo;
        
        $apoyo->save();

        return redirect('desarrollosocial/apoyos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $apoyo = Apoyo::find($id);
        return view ('desarrollosocial.apoyos.update',["apoyo" => $apoyo]);
    }


    public function update(Request $request, $id)
    {
        $apoyo = Apoyo::find($id);;

        $apoyo->id_apoyo = $request->id_apoyo;
        $apoyo->nombreapoyo = $request->nombreapoyo;
        
        if($apoyo->save())
        {
            return redirect("/desarrollosocial/apoyos");
        }
        else{
            return view("desarrollosocial/apoyos.edit", ["apoyo" => $apoyo]);
        }
    }

    public function destroy($id)
    {
        $apoyos = Apoyo::find($id);
        $apoyos->delete();
        return redirect()->back();
    }
}
