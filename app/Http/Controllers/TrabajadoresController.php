<?php

namespace App\Http\Controllers;

use App\Models\trabajadores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('trabajadores.index');
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
        $datosTrabajadores = $request->except(['_token']);
        if($request->hasFile('foto')){
            $datosTrabajadores['foto']=$request->file('foto')->store('uploads','public');
        }
        //$redireccion = '/trabajadores'.$datosTrabajadores['id'];
        trabajadores::insert($datosTrabajadores);
        return redirect('/trabajadores/1');
        //return response()->json($datosTrabajadores);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $datos['trabajadores']=trabajadores::paginate(100);
        return view('trabajadores.verTrabajadores', $datos);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function edit(trabajadores $trabajadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trabajadores $trabajadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trabajadores=trabajadores::findOrFail($id);
        if(Storage::delete('public/'.$trabajadores->foto)){
            trabajadores::destroy($id);
        }
        return redirect('/trabajadores/1');
    }
}
