<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = new Tipo;
        $tipos = Tipo::OrderBy('id', 'asc')->paginate();

        return response($tipos, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo = new Tipo;
        $tipo->create($request->all());

        return response('Tipo de animal ingresado correctamente', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tipo $tipo)
    {
        return response($tipo, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo $tipo)
    {
        $tipo->update($request->all());

        return response($tipo, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tipo $tipo)
    {
        $tipo->delete();


        return response('Producto eliminado correctamente', 201);
    }
}
