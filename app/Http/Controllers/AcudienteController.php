<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Acudiente;
use App\Estudiante;

class AcudienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $estudiantes = Estudiante::all();
      return view('acudientes')->with(['estudiantes' => $estudiantes]);
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
        'documento' => 'required|unique:acudientes',
        'telefono' => 'required',
        'direccion' => 'required',
        'parentezco' => 'required'
      ]);

      $acudiente = new Acudiente();
      $acudiente->nombre = $request->nombre;
      $acudiente->apellido = $request->apellido;
      $acudiente->documento = $request->documento;
      $acudiente->telefono = $request->telefono;
      $acudiente->direccion = $request->direccion;
      $acudiente->est_id = $request->est_id;
      $acudiente->parentezco = $request->parentezco;


      if($acudiente->save()){
          return back()->with('msj', 'Datos guardados');
      }else{
        return back()->with('errormsj', 'Error al guardar los datos');
      }
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
