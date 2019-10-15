<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;
/**use App\products;*/


class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $products=products::all();
        return view('inventario',['productos' =>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createProduct(Request $request)
    {
       $newproduct = new products;

        $newproduct->producto = $request->producto;
        $newproduct->presentacion = $request->presentacion;
        $newproduct->cantidad = $request->cantidad;
        $newproduct->medida = $request->medida;
        $newproduct->precio = $request->precio;
        $newproduct->stock = $request->stock;
        $newproduct->fechacad = $request->fechacad;
        $newproduct->imagen = Null;

        $newproduct->save();

        return view('newproduc')->with('created','Producto Registrado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
