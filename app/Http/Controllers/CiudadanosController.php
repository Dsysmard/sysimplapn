<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudadano as Ciudadano;
use App\User as User;
use Auth;
use Image;

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

    public function profile(){
        return view('desarrollosocial.usuarios.profile', array('user' => Auth::user()) );
    }

    public function update_avatar(Request $request){

        // Handle the user upload of avatar
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save( public_path('uploads/avatars/' . $filename ) );

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('desarrollosocial.usuarios.profile', array('user' => Auth::user()) );

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
        


        if($request->hasFile('fotoine')){
            $fotoine = $request->file('fotoine');
            $filename = time() . '.' . $fotoine->getClientOriginalExtension();
            Image::make($fotoine)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

            $ciudadano->fotoine = $request->fotoine;
            $ciudadano->fotoine = $filename;
            $ciudadano->save();
        }

        
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
