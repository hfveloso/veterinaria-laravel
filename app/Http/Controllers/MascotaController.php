<?php

namespace App\Http\Controllers;

use App\Http\Requests\MascotaRequest;
use App\Http\Requests\StoreMascota;
use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = new Mascota;
        $mascotas = Mascota::OrderBy('id', 'asc')->paginate();

        return response($mascotas, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMascota $request)
    {
        //if ($request->validated()) {
            # code...
        //}
        $mascota = new Mascota;
        $mascota->create($request->all());

        return response('Mascota ingresada correctamente', 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        return response($mascota, 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
        $mascota->update($request->all());

        return response($mascota, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mascota $mascota)
    {
        $mascota->delete();

        return response('Mascota eliminada correctamente', 201);
    }
}
