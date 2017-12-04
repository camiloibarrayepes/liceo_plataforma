<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Estudiante;
use App\Matricula;

class MatriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $estudiantes = Estudiante::all();
      return view('matricula')->with(['estudiantes' => $estudiantes]);
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
        'f_matricula' => 'required',
        'valor_matricula' => 'required'
      ]);

      $matricula = new Matricula();
      $matricula->f_matricula=$request->f_matricula;
      $matricula->valor_matricula=$request->valor_matricula;
      $matricula->estado_matricula=$request->estado_matricula;
      $matricula->estado_materiales=$request->estado_materiales;
      $matricula->estado_seguro=$request->estado_seguro;
      $matricula->estado_bono=$request->estado_bono;
      $matricula->observaciones=$request->observaciones;
      $matricula->est_id=$request->est_id;

      if((($matricula->estado_materiales) and ($matricula->estado_matricula) and ($matricula->estado_bono) and ($matricula->estado_seguro))==1)
      {
        $matricula->estado=1;
      }else{
        $matricula->estado=0;
      }

      if($matricula->save()){
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
      $estudiantes = Estudiante::find($id);
      $matriculas = Matricula::where("est_id",$id)->first();
      return view('matricula')->with(['estudiantes' => $estudiantes, 'matriculas' => $matriculas]);
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
      $matricula = Matricula::where("est_id",$id)->first();
      $matricula->estado_matricula=$request->estado_matricula;
      $matricula->estado_materiales=$request->estado_materiales;
      $matricula->estado_seguro=$request->estado_seguro;
      $matricula->estado_bono=$request->estado_bono;
      $matricula->observaciones=$request->observaciones;
      $matricula->est_id=$request->est_id;

      if((($matricula->estado_materiales) and ($matricula->estado_matricula) and ($matricula->estado_bono) and ($matricula->estado_seguro))==1)
      {
        $matricula->estado=1;
      }else{
        $matricula->estado=0;
      }

      if($matricula->save()){
          return back()->with('msj', 'Datos guardados');
      }else{
        return back()->with('errormsj', 'Error al guardar los datos');
      }

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
