@if(isset($estudiantes))
<ul class="list-group">
  <li class="list-group-item"><b>Nombre:</b> {{ $estudiantes->nombre }}</li>
  <li class="list-group-item"><b>Apellido: </b>{{ $estudiantes->apellido }}</li>
  <li class="list-group-item"><b>Documento:</b> {{ $estudiantes->documento }}</b></li>
  <li class="list-group-item"><b>Edad: </b>{{ $edad = Carbon::parse($estudiantes->f_nacimiento)->age }}</li>
  <li class="list-group-item"><b>Telefono: </b>{{ $estudiantes->telefono }}</li>
  <li class="list-group-item"><b>Dirección: </b>{{ $estudiantes->direccion }}</li>
  <li class="list-group-item"><b>EPS: </b>{{ $estudiantes->eps }}</li>
  <li class="list-group-item"><b>Grado Actual: </b>{{ $estudiantes->grado }}</li>
  @if(isset($estudiantes->observaciones))
  {
    <li class="list-group-item">Observaciones: </b>{{ $estudiantes->observaciones }}</li>
  }
  @endif
</ul>

<center>
  <nav class="nav">
    <a class="nav-link active" href="{{ url('estudiante') }}" style="color:green">Volver</a> -
    <a class="nav-link active" href="#">Editar</a> -
    <a class="nav-link" href="#">Eliminar</a> -
    <a class="nav-link" href="#">Pagar pensión</a> -
    <a class="nav-link disabled" href="../matricula/{{ $estudiantes->id }}">Registrar matrícula</a>
  </nav>
</center>
@endif
