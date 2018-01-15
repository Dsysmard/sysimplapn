<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Localidad as Localidad;
class LocalidadesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $localidades = Localidad::all();
        return \View::make('desarrollosocial.localidades.index', compact('localidades'));
    }

    public function search(Request $request)
    {
         $localidades = Localidad::where('id_localidad','like','%'.$request->id_localidad.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('desarrollosocial.localidades.index',compact('localidades'));
    }

    public function create()
    {
        return \View::make('desarrollosocial.localidades.create');
    }

    public function store(Request $request)
    {
        $localidades = new Localidad;

        $localidades->id_localidad = $request->id_localidad;
        $localidades->nombrelocalidad = $request->nombrelocalidad;
        
        $localidades->save();

        return redirect('desarrollosocial/localidades');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $localidades = Localidad::find($id);
        return view ('desarrollosocial.localidades.update',["localidades" => $localidades]);
    }

    public function update(Request $request, $id)
    {
        $localidades = Localidad::find($id);;

        $localidades->id_localidad = $request->id_localidad;
        $localidades->nombrelocalidad = $request->nombrelocalidad;
        
        if($localidades->save())
        {
            return redirect("/desarrollosocial/localidades");
        }
        else{
            return view("desarrollosocial/localidades.edit", ["localidades" => $localidades]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $localidades = Localidad::find($id);
        $localidades->delete();
        return redirect()->back();
    }
}
