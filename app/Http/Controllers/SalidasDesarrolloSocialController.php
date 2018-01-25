<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Apoyo as Apoyo;
use App\Ciudadano as Ciudadano;
use App\Estado as Estado;
use App\Localidad as Localidad;
use App\Municipio as Municipio;
use App\Seccion as Seccion;
use App\Salida as Salida;

use DB;

class SalidasDesarrolloSocialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function get_estados()
    {
        


    }

    
    public function index()
    {
        $salidas = DB::table('salidas')
        ->join('ciudadanos', 'ciudadanos.curp', '=', 'salidas.curp')
        ->join('estados', 'estados.id_estado', '=', 'salidas.id_estado')
        ->join('municipios','municipios.id_municipio','=','salidas.id_municipio')
        ->join('localidads','localidads.id_localidad','=','salidas.id_localidad')
        ->join('seccions','seccions.id_seccion','=','salidas.id_seccion')
        ->join('apoyos','apoyos.id_apoyo','=','salidas.id_apoyo')
        ->select('salidas.id',

                 'ciudadanos.curp', 

                 'ciudadanos.nombre', 

                 'ciudadanos.apellido', 

                 'ciudadanos.calle', 
                 
                 'ciudadanos.numero', 

                 'ciudadanos.colonia',

                 'estados.nombreestado',

                 'municipios.nombremunicipio',

                 'localidads.nombrelocalidad',

                 'seccions.nombreseccion',

                 'apoyos.nombreapoyo',

                 'salidas.observaciones'
            )->get();

        return \View::make('desarrollosocial.salidas.index', compact('salidas'));

        //dd($salidas);
    }

    public function search(Request $request)
    {

        // $salidas = Salida::where('rfcCliente', 'like', '%' .$request->rfcCliente.'%')->get();

       $salidas = DB::table('salidas')

       ->join('ciudadanos', 'ciudadanos.curp', '=', 'salidas.curp')
        ->join('estados', 'estados.id_estado', '=', 'salidas.id_estado')
        ->join('municipios','municipios.id_municipio','=','salidas.id_municipio')
        ->join('localidads','localidads.id_localidad','=','salidas.id_localidad')
        ->join('seccions','seccions.id_seccion','=','salidas.id_seccion')
        ->join('apoyos','apoyos.id_apoyo','=','salidas.id_apoyo')
        ->select('salidas.id',
                 'ciudadanos.curp', 
                 'ciudadanos.nombre', 
                 'ciudadanos.apellido', 
                 'ciudadanos.calle', 
                 'ciudadanos.numero', 
                 'ciudadanos.colonia',
                 'estados.nombreestado',
                 'municipios.nombremunicipio',
                 'localidads.nombrelocalidad',
                 'seccions.nombreseccion',
                 'apoyos.nombreapoyo',
                 'salidas.observaciones'
            )
        ->where('ciudadanos.curp', 'like', '%' .$request->curp.'%')
        ->get();
        return \View::make('desarrollosocial.salidas.index',compact('salidas'));
    }

    public function create()
    {
        $estados = Estado::all();
        $municipios = Municipio::all();
        $localidad = Localidad::all();
        $seccion = Seccion::all();
        $apoyo = Apoyo::all();
        return view("desarrollosocial.salidas.create", compact('estados', 'municipios','localidad', 'seccion', 'apoyo'));
        //return \View::make('desarrollosocial.salidas.create');
    }

    public function store(Request $request)
    {
        $salida = new Salida;

        $salida->id = $request->id;
        $salida->curp = $request->curp;
        $salida->id_estado = $request->id_estado;
        $salida->id_municipio = $request->id_municipio;
        $salida->id_localidad = $request->id_localidad;
        $salida->id_seccion = $request->id_seccion;
        $salida->id_apoyo = $request->id_apoyo;
        $salida->observaciones = $request->observaciones;
        $salida->firmaciudadano = $request->firmaciudadano;
        $salida->save();

        return redirect('desarrollosocial/salidas');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $salida = Salida::find($id);
        return view('desarrollosocial.salidas.update',["salida" => $salida]);
    }

    public function update(Request $request, $id)
    {
        $salida = Salida::find($id);

        $salida->id = $request->id;
        $salida->curp = $request->curp;
        $salida->id_estado = $request->id_estado;
        $salida->id_localidad = $request->id_localidad;
        $salida->id_seccion = $request->id_seccion;
        $salida->id_apoyo = $request->id_apoyo;
        $salida->observaciones = $request->observaciones;
        $salida->firmaciudadano = $request->firmaciudadano;
        if($salida->save())
        {
            return redirect('desarrollosocial/salidas');
        }
        else
        {
            return view("desarrollosocial/salidas.edit",["salida"=>$salida]);
        }
    }

    public function destroy($id)
    {
        $salidas = Salida::find($id);
        $salidas->delete();
        return redirect()->back();
    }
}
