@if(session()->has('msj'))
  <div class="alert alert-success" role="alert">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
  <div class="alert alert-danger" role="alert">Error al guardar los datos</div>
@endif

@if(isset($estudiante))
<form  role="form" method="POST" action="{{ route('estudiante.update', $estudiante->id) }}">
  <input name="_method" type="hidden" value="PUT">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre estudiante</label>
    <input type="text" class="form-control" name="nombre" value="{{ $estudiante->nombre }}">
  @if($errors->has('nombre'))
      <span style="color:red;" >{{ $errors->first('nombre') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellidos</label>
    <input type="text" class="form-control" name="apellido" value="{{ $estudiante->apellido}}">
  @if($errors->has('apellido'))
      <span style="color:red;" >{{ $errors->first('apellido') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Documento</label>
    <input type="number" class="form-control" name="documento" value="{{ $estudiante->documento }}">
  @if($errors->has('documento'))
      <span style="color:red;" >{{ $errors->first('documento') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha nacimiento</label>
    <input type="date" class="form-control" name="f_nacimiento" value="{{ $estudiante->f_nacimiento }}" >
  @if($errors->has('f_nacimiento'))
      <span style="color:red;" >{{ $errors->first('f_nacimiento') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input type="number" class="form-control" name="telefono" value="{{ $estudiante->telefono }}" >
  @if($errors->has('telefono'))
      <span style="color:red;" >{{ $errors->first('telefono') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Dirección</label>
    <input type="text" class="form-control" name="direccion" value="{{ $estudiante->direccion }}" >
  @if($errors->has('direccion'))
      <span style="color:red;" >{{ $errors->first('direccion') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">EPS</label>
    <input type="text" class="form-control" name="eps" value="{{ $estudiante->eps }}" >
  @if($errors->has('eps'))
      <span style="color:red;" >{{ $errors->first('eps') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Grado</label>
    <input type="number" class="form-control" name="grado" value="{{ $estudiante->grado }}" >
  @if($errors->has('grado'))
      <span style="color:red;" >{{ $errors->first('grado') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Grado y colegio anterior</label>
    <input type="text" class="form-control" name="grado_colegio_anterior" value="{{ $estudiante->grado_colegio_anterior }}" >
  @if($errors->has('grado_colegio_anterior'))
      <span style="color:red;" >{{ $errors->first('grado_colegio_anterior') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Observaciones</label>
    <textarea class="form-control" name="observaciones" value="{{ $estudiante->observaciones }}" ></textarea>
  </div>
  <button type="submit" class="btn btn-default">Registrar</button>
</form>
@endif
