<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UnidadMedida;

class UnidadMedidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidad=UnidadMedida::all();
        return view('inventario.unidad_medida.index')->with('unidad',$unidad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.unidad_medida.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $unidad=new UnidadMedida();
        $unidad->id=$request->get('codigo');
        $unidad->nombre= $request->get('nombre');
        $unidad->save();

        return redirect('/unidadmedida');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $unidad=UnidadMedida::find($id);
        return view('inventario.unidad_medida.edit')->with('unidad',$unidad);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $unidad=UnidadMedida::find($id);
        $unidad->id= $request->get('codigo');
        $unidad->nombre= $request->get('nombre');
    
        $unidad->save();

        return redirect('/unidadmedida');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $unidad=UnidadMedida::find($id);
        $unidad->delete();
        return redirect('/unidadmedida');
    }
}
