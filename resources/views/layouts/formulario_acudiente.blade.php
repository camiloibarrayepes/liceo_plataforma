@if(session()->has('msj'))
  <div class="alert alert-success" role="alert">{{ session('msj') }}</div>
@endif
@if(session()->has('errormsj'))
  <div class="alert alert-danger" role="alert">Error al guardar los datos</div>
@endif

@if(isset($estudiantes))

<form  role="form" method="POST" action="{{ url('acudiente') }}">
  {{ csrf_field() }}

  <div class="form-group">
    <label for="exampleFormControlSelect1">Estudiante</label>
    <select class="form-control" name="est_id">
      @foreach($estudiantes as $es)
      <option value="{{ $es->id }}">{{ $es->nombre }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nombre acudiente</label>
    <input type="text" class="form-control" name="nombre" placeholder="Escribir nombre del acudiente">
  @if($errors->has('nombre'))
      <span style="color:red;" >{{ $errors->first('nombre') }}</span>
  @endif
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellidos</label>
    <input type="text" class="form-control" name="apellido" placeholder="Escribir apellidos del acudiente">
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
    <label for="exampleInputPassword1">Parentezco</label>
    <input type="text" class="form-control" name="parentezco" placeholder="Escribir parentezco con el estudiante">
  @if($errors->has('parentezco'))
      <span style="color:red;" >{{ $errors->first('parentezco') }}</span>
  @endif
  </div>
  <button type="submit" class="btn btn-default">Registrar</button>
</form>
@endif
