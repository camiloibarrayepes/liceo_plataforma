<form  role="form" method="POST" action="{{ url('estudiante') }}">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre estudiante</label>
    <input type="text" class="form-control" name="nombre" placeholder="Escribir nombre del estudiante">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Apellidos</label>
    <input type="text" class="form-control" name="apellido" placeholder="Escribir apellidos del estudiante">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Documento</label>
    <input type="number" class="form-control" name="documento" placeholder="Escribir numero de documento">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Fecha nacimiento</label>
    <input type="date" class="form-control" name="f_nacimiento" placeholder="">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input type="number" class="form-control" name="telefono" placeholder="Escribir numero de telefono">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Dirección</label>
    <input type="text" class="form-control" name="direccion" placeholder="Escribir dirección">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">EPS</label>
    <input type="text" class="form-control" name="eps" placeholder="Escribir a que EPS pertenece">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Grado</label>
    <input type="number" class="form-control" name="grado" placeholder="Escribir grado al cual se matricula">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Grado y colegio anterior</label>
    <input type="text" class="form-control" name="grado_colegio_anterior" placeholder="Escribir el grado anterior y el colegio de procedencia">
  </div>
  <button type="submit" class="btn btn-default">Registrar</button>
</form>
