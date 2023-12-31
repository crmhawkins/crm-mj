<?php

namespace App\Http\Controllers;

use App\Models\TipoProducto;
use App\Http\Requests\StoreTipoProductoRequest;
use App\Http\Requests\UpdateTipoProductoRequest;

class TipoProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTipoProductoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoProductoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoProducto  $tipoProducto
     * @return \Illuminate\Http\Response
     */
    public function show(TipoProducto $tipoProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoProducto  $tipoProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoProducto $tipoProducto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTipoProductoRequest  $request
     * @param  \App\Models\TipoProducto  $tipoProducto
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoProductoRequest $request, TipoProducto $tipoProducto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoProducto  $tipoProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoProducto $tipoProducto)
    {
        //
    }
}
