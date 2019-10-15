<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\consulta;

class consultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consult=consulta::all();
        return view('ventas',['datos' =>$consult]);//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createConsulta()
    {
        $newconsult = new consulta;

        $newconsulta->nombre = $request->nombre;
        $newconsulta->appat = $request->appat;
        $newconsulta->apmat = $request->apmat;
        $newconsulta->calle = $request->calle;
        $newconsulta->colonia = $request->colonia;
        $newconsulta->muni = $request->muni;
        $newconsulta->talla = $request->talla;
        $newconsulta->sex = $request->sex;
        $newconsulta->edad = $request->edad;
        $newconsulta->diagnost = $request->diagnost;

        $newconsulta->save();

        /**return view('newconsult')->with('created','Producto Registrado');*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
