<?php

namespace App\Http\Controllers;

use App\Models\Paralelo;
use Illuminate\Http\Request;
use App\Models\Paralelos;

class ParaleloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paralelos = Paralelo::all();
        return view('paralelo.index')->with('paralelos',$paralelos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('paralelo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paralelo = new Paralelo();

        $paralelos->codigo = $request->get('codigo');
        $paralelos->descripcion = $request->get('descripcion');

        $paralelos->save();

        return redirect('/paralelo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paralelo  $paralelo
     * @return \Illuminate\Http\Response
     */
    public function show(Paralelo $paralelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paralelo  $paralelo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paralelo = Paralelo::find($id);
        return view('paralelo.edit')->with('paralelo',$paralelo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paralelo  $paralelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paralelo = Paralelo::find($id);

        $paralelo->codigo = $request->get('codigo');
        $paralelo->descripcion = $request->get('descripcion');

        $paralelo->save();

        return redirect('/paralelo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paralelo  $paralelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paralelo $paralelo)
    {
        $paralelo = Paralelo::find($id);
        $paralelo->delete();

        return redirect('/paralelo');
    }
}
