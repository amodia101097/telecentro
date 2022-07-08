<?php

namespace App\Http\Controllers;

use App\Models\Puerto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PuertoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $port = Puerto::all();
        return $port;
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // id_puerto / id_cliente / categoria / creado_por / fecha_creacion

        $port = new Puerto();
        $port->id_puerto = $request->id_puerto;
        $port->id_cliente = $request->id_cliente;
        $port->categoria = $request->categoria;
        $port->creado_por = $request->creado_por;
        $port->save();


        return response('successfull', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Puerto  $puerto
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $port = Puerto::findOrFail($request->id);
        return $port;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Puerto  $puerto
     * @return \Illuminate\Http\Response
     */
    public function edit(Puerto $puerto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Puerto  $puerto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $port = Puerto::findOrFail($request->id);

        $port->id_puerto = $request->id_puerto;
        $port->id_cliente = $request->id_cliente;
        $port->categoria = $request->categoria;
        $port->creado_por = $request->creado_por;

        $port->save();

        return $port;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Puerto  $puerto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $port = Puerto::destroy($request->id);
        return $port;
    }

    public function searchIdp(Request $request)
    {
        return DB::select("select * from PUERTOS where id_puerto = " . $request->id_puerto);
    }

    public function deleteIdp(Request $request)
    {
        DB::select("delete from PUERTOS where id_puerto = " . $request->id_puerto);
    }

    public function apiP(Request $request)
    {
        return DB::select("select * from PUERTOS where id_puerto =  " . $request->id_puerto . " and id_cliente = " . $request->id_cliente);
    }

    public function showP(Request $request)
    {
        return DB::select("select * FROM PUERTOS P
                           FULL JOIN CLIENTES C
                           ON P.id_cliente = C.id where id_puerto = " . $request->id_puerto . " and id_cliente = " . $request->id_cliente);
    }
}
