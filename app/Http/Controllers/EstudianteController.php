<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estudiante;

class EstudianteController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
          'nombre' => 'required',
          'apellido' => 'required',
          'documento' => 'required',
          'f_nacimiento' => 'required',
          'telefono' => 'required',
          'direccion' => 'required',
          'eps' => 'required',
          'grado' => 'required',
          'grado_colegio_anterior' => 'required'
        ]);

        $estudiante = new Estudiante();
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->documento = $request->documento;
        $estudiante->f_nacimiento = $request->f_nacimiento;
        $estudiante->telefono = $request->telefono;
        $estudiante->direccion = $request->direccion;
        $estudiante->eps = $request->eps;
        $estudiante->grado = $request->grado;
        $estudiante->grado_colegio_anterior = $request->grado_colegio_anterior;

        $estudiante->save();
        return back();
        dd("datos guardados");

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
