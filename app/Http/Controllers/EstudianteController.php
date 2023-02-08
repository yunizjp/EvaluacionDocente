<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;
use App\Imports\EstudiantesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;


class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiante.index')->with('estudiantes',$estudiantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estudiantes = new Estudiante();

        $estudiantes->periodo = $request->get('periodo');
        $estudiantes->carrera = $request->get('carrera');
        $estudiantes->asignatura = $request->get('asignatura');
        $estudiantes->num_matricula = $request->get('num_matricula');
        $estudiantes->cedula = $request->get('cedula');
        $estudiantes->nombre_completo = $request->get('nombre_completo');
        $estudiantes->sexo = $request->get('sexo');
        $estudiantes->correo = $request->get('correo');
        $estudiantes->nivel = $request->get('nivel');
        $estudiantes->paralelo = $request->get('paralelo');
        $estudiantes->jornada = $request->get('jornada');
        $estudiantes->estado = $request->get('estado');

        $estudiantes->save();

        return redirect('/estudiante');
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudiante  $carrera
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiante $estudiante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = Estudiante::find($id);
        return view('estudiante.edit')->with('estudiante',$estudiante);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->periodo = $request->get('periodo');
        $estudiante->carrera = $request->get('carrera');
        $estudiante->asignatura = $request->get('asignatura');
        $estudiante->num_matricula = $request->get('num_matricula');
        $estudiante->cedula = $request->get('cedula');
        $estudiante->nombre_completo = $request->get('nombre_completo');
        $estudiante->sexo = $request->get('sexo');
        $estudiante->correo = $request->get('correo');
        $estudiante->nivel = $request->get('nivel');
        $estudiante->paralelo = $request->get('paralelo');
        $estudiante->jornada = $request->get('jornada');
        $estudiante->estado = $request->get('estado');

        $estudiante->save();

        return redirect('/estudiante');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudiante  $estudiante
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();

        return redirect('/estudiante');
    }
    
    public function import(){
        return view('estudiante.import');
    }

     public function importdata(Request $request)
    {
        Excel::import(new EstudiantesImport, request()->file('documento'));
        return redirect('/estudiante');
    }

}
