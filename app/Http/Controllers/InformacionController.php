<?php

namespace FotoPrisma\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use FotoPrisma\Http\Requests;
use FotoPrisma\Informacion; 
use FotoPrisma\Http\Requests\InformacionFormRequest;

use DB;

class InformacionController extends Controller
{
    public function index(Request $request)
    {
        if($request)
        {
        	$query=trim($request->get('searchText'));
        	$informaciones=DB::table('Informacion as info')
        	->select('info.idInformacion','info.Mision','info.Vision','info.HorarioAtencion','info.Contactenos')
        	->where('info.idInformacion','LIKE','%'.$query.'%');
        	
        	return view('informacion.admin.index',["informaciones"=>$informaciones,"searchText"=>$query]);
       
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InformacionFormRequest $request)
    {
       $informacion=new Informacion;

        $informacion->Mision=$request->get('Mision');
        $informacion->Vision=$request->get('Vision');
        $informacion->HorarioAtencion=$request->get('HorarioAtencion');
        $informacion->Contactenos=$request->get('Contactenos');            

        $informacion->save();

        return Redirect::to('admin/informacion/admin');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        return view("informacion.show",["informacion"=>Informacion::findOrFail($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view("informacion.edit",["informacion"=>Informacion::findOrFail($id)]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InformacionFormRequest $request, $id)
    {
     	$informacion=Informacion::findOrFail($id);

     	$informacio->Mision=$request->get('Mision');
     	$informacion->Vision=$request->get('Vision');
     	$informacion->HorarioAtencion=$request->get('HorarioAtencion');
     	$informacion->Contactenos=$request->get('Contactenos');
     	
        $informacion->update();

        return Redirect::to('admin/informacion/admin');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
       
    }
}
