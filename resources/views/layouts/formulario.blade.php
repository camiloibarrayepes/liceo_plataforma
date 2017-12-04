@if(session()->has('msj'))
  <div class="alert alert-success" role="alert">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
  <div class="alert alert-danger" role="alert">Error al guardar los datos</div>
@endif

<form  role="form" method="POST" action="{{ url('estudiante') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre estudiante</label>
    <input type="text" class="form-control" name="nombre" placeholder="Escribir nombre del estudiante">
  @if($errors->has('nombre'))
      <span style="color:red;" >{{ $errors->first('nombre') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellidos</label>
    <input type="text" class="form-control" name="apellido" placeholder="Escribir apellidos del estudiante">
  @if($errors->has('apellido'))
      <span style="color:red;" >{{ $errors->first('apellido') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Documento</label>
    <input type="number" class="form-control" name="documento" placeholder="Escribir numero de documento">
  @if($errors->has('documento'))
      <span style="color:red;" >{{ $errors->first('documento') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha nacimiento</label>
    <input type="date" class="form-control" name="f_nacimiento" placeholder="">
  @if($errors->has('f_nacimiento'))
      <span style="color:red;" >{{ $errors->first('f_nacimiento') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input type="number" class="form-control" name="telefono" placeholder="Escribir numero de telefono">
  @if($errors->has('telefono'))
      <span style="color:red;" >{{ $errors->first('telefono') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Dirección</label>
    <input type="text" class="form-control" name="direccion" placeholder="Escribir dirección">
  @if($errors->has('direccion'))
      <span style="color:red;" >{{ $errors->first('direccion') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">EPS</label>
    <input type="text" class="form-control" name="eps" placeholder="Escribir a que EPS pertenece">
  @if($errors->has('eps'))
      <span style="color:red;" >{{ $errors->first('eps') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Grado</label>
    <input type="number" class="form-control" name="grado" placeholder="Escribir grado al cual se matricula">
  @if($errors->has('grado'))
      <span style="color:red;" >{{ $errors->first('grado') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Grado y colegio anterior</label>
    <input type="text" class="form-control" name="grado_colegio_anterior" placeholder="Escribir el grado anterior y el colegio de procedencia">
  @if($errors->has('grado_colegio_anterior'))
      <span style="color:red;" >{{ $errors->first('grado_colegio_anterior') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Observaciones</label>
    <textarea class="form-control" name="observaciones" placeholder="Escribir Observaciones si son necesarias"></textarea>
  </div>
  <a href="{{ url('/acudiente') }}">Registrar acudiente</a><br><br>
  <button type="submit" class="btn btn-default">Registrar</button>
</form>
