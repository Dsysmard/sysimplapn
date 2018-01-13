<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudadano as Ciudadano;


class CiudadanosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ciudadanos = Ciudadano::all();
        return \View::make('desarrollosocial.ciudadanos.index', compact('ciudadanos'));
    }

    public function search(Request $request)
    {
        
        $ciudadanos = Ciudadano::where('curp','like','%'.$request->curp.'%')->get(); 

        //Cambiando la clausula de conexion soportada por Heroku ya que utiliza postgresql y no mysql
        //$pedidos = Pedido::where('idcliente', '=', $request->idcliente)->get();
        return \View::make('desarrollosocial.ciudadanos.index',compact('ciudadanos'));
    
    }

    
    public function create()
    {

    return \View::make('desarrollosocial.ciudadanos.create');        
    
    }

    public function store(Request $request)
    {
        $ciudadano = new Ciudadano;

        $ciudadano->nombre = $request->nombre;
        $ciudadano->apellido = $request->apellido;
        $ciudadano->edad = $request->edad;
        $ciudadano->sexo = $request->sexo;
        $ciudadano->calle = $request->calle;
        $ciudadano->folio = $request->folio;
        $ciudadano->numero = $request->numero;
        $ciudadano->colonia = $request->colonia;
        $ciudadano->codigopostal = $request->codigopostal;
        $ciudadano->folio = $request->folio;
        $ciudadano->clavedeelector = $request->clavedeelector;
        $ciudadano->curp = $request->curp;
        $ciudadano->emision = $request->emision;
        $ciudadano->vigencia = $request->vigencia;
        $ciudadano->fotoine = $request->fotoine;

        $ciudadano->save();

        return redirect('desarrollosocial/ciudadanos');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ciudadano = Ciudadano::find($id);
        return view ('desarrollosocial.ciudadanos.update',["ciudadano" => $ciudadano]);
    }

    public function update(Request $request, $id)
    {
        $ciudadano = Ciudadano::find($id);;

        $ciudadano->nombre = $request->nombre;
        $ciudadano->apellido = $request->apellido;
        $ciudadano->edad = $request->edad;
        $ciudadano->sexo = $request->sexo;
        $ciudadano->calle = $request->calle;
        $ciudadano->folio = $request->folio;
        $ciudadano->numero = $request->numero;
        $ciudadano->colonia = $request->colonia;
        $ciudadano->codigopostal = $request->codigopostal;
        $ciudadano->folio = $request->folio;
        $ciudadano->clavedeelector = $request->clavedeelector;
        $ciudadano->curp = $request->curp;
        $ciudadano->emision = $request->emision;
        $ciudadano->vigencia = $request->vigencia;
        $ciudadano->fotoine = $request->fotoine;

        if($ciudadano->save())
        {
            return redirect("/desarrollosocial/ciudadanos");
        }
        else{
            return view("desarrollosocial/ciudadanos.edit", ["ciudadano" => $ciudadano]);
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
        $ciudadanos = Ciudadano::find($id);
        $ciudadanos->delete();
        return redirect()->back();
    }
}
