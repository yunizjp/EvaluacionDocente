<?php

namespace App\Http\Controllers;

use App\Models\pregunta;
use Illuminate\Http\Request;
use App\Models\Preguntas;

class PreguntaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preguntas = Pregunta::all();
        return view('pregunta.index')->with('preguntas',$preguntas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pregunta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $preguntas = new Pregunta();

        $preguntas->codigo = $request->get('codigo');
        $preguntas->descripcion = $request->get('descripcion');

        $preguntas->save();

        return redirect('/pregunta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function show(pregunta $pregunta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pregunta = Pregunta::find($id);
        return view('pregunta.edit')->with('pregunta',$pregunta);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pregunta = Pregunta::find($id);

        $pregunta->codigo = $request->get('codigo');
        $pregunta->descripcion = $request->get('descripcion');

        $pregunta->save();

        return redirect('/pregunta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pregunta  $pregunta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pregunta = Pregunta::find($id);
        $pregunta->delete();

        return redirect('/pregunta');
    }
}
