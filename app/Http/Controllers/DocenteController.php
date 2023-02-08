<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;
use App\Imports\DocentesImport;
use Maatwebsite\Excel\Facades\Excel;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docentes = Docente::all();
        return view('docente.index')->with('docentes',$docentes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('docente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $docentes = new Docente();
        $docentes->periodo = $request->get('periodo');
        $docentes->carrera = $request->get('carrera');
        $docentes->nivel = $request->get('nivel');
        $docentes->asignatura = $request->get('asignatura');
        $docentes->paralelo = $request->get('paralelo');
        $docentes->jornada = $request->get('jornada');
        $docentes->cedula = $request->get('cedula');
        $docentes->nombre_completo = $request->get('nombre_completo');

        $docentes->save();

        return redirect('/docente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function show(Docente $docente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $docente = Docente::find($id);
        return view('docente.edit')->with('docente',$docente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $docente = Docente::find($id);
        $docente->periodo = $request->get('periodo');
        $docente->carrera = $request->get('carrera');
        $docente->nivel = $request->get('nivel');
        $docente->asignatura = $request->get('asignatura');
        $docente->paralelo = $request->get('paralelo');
        $docente->jornada = $request->get('jornada');
        $docente->cedula = $request->get('cedula');
        $docente->nombre = $request->get('nombre');
        $docente->save();

        return redirect('/docente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docente  $docente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $docente = Docente::find($id);
        $docente->delete();

        return redirect('/docente');
    }

    public function import(){
        return view ('docente.import');
    }

    public function importdata(Request $request){
        Excel::import(new DocentesImport, request()->file('documento'));
        return redirect('/docente');
    }
}
