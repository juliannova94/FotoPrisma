<?php

namespace FotoPrisma\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use FotoPrisma\Http\Requests;
use FotoPrisma\Servicio; 
use FotoPrisma\Http\Requests\ServicioFormRequest;

use DB;

class ServicioClienteController extends Controller
{

     /*public function __construct()
    {
        //$this->middleware('auth');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        if($request)
        {
            $query=trim($request->get('searchText'));
            $servicios=DB::table('servicio as serv')
            ->join('Categoria as cat','serv.idCategoria','=','cat.idCategoria')
            ->select('serv.idServicio','cat.Nombre as Categoria','serv.Nombre','serv.Descripcion','serv.Precio','serv.Imagen', 'serv.Existencias','serv.Estado')            
            ->where('serv.Estado','=','Activo')
            ->orderBy('serv.idServicio','desc')            
            ->paginate(3);


            return view('client.servicio.index',["servicios"=>$servicios,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("inventario.servicio.show",["servicio"=>Servicio::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
  

 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   
     
}