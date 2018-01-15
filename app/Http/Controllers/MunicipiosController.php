<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Municipio as Municipio;
class MunicipiosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $municipios = Municipio::all();
        return \View::make('desarrollosocial.municipios.index', compact('municipios'));
    }

    public function search(Request $request){
         $municipios = Municipio::where('id_municipio','like','%'.$request->id_municipio.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('desarrollosocial.municipios.index',compact('municipios'));
    }

    public function create()
    {
        return \View::make('desarrollosocial.municipios.create');
    }

    public function store(Request $request)
    {
        $municipios = new Municipio;

        $municipios->id_municipio = $request->id_municipio;
        $municipios->nombremunicipio = $request->nombremunicipio;
        
        $municipios->save();

        return redirect('desarrollosocial/municipios');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $municipios = Municipio::find($id);
        return view ('desarrollosocial.municipios.update',["municipios" => $municipios]);
    }

    public function update(Request $request, $id)
    {
        $municipios = Municipio::find($id);;

        $municipios->id_municipio = $request->id_municipio;
        $municipios->nombremunicipio = $request->nombremunicipio;
        
        if($municipios->save())
        {
            return redirect("/desarrollosocial/municipios");
        }
        else{
            return view("desarrollosocial/municipios.edit", ["municipios" => $municipios]);
        }
    }


    public function destroy($id)
    {
        $municipios = Municipio::find($id);
        $municipios->delete();
        return redirect()->back();
    }
}
