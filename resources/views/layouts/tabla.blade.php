<table class="table table-hover">
  @if(isset($estudiantes))
  <thead>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Documento</th>
    <th>Opción 1</th>
    <th>Opción 2</th>
    <th>Opción 3</th>
  </thead>
  <tbody>
    @foreach($estudiantes as $es)
    <tr>
      <td>{{ $es->nombre }}</td>
      <td>{{ $es->apellido }}</td>
      <td>{{ $es->documento }}</td>
      <td><a href="estudiante/{{ $es->id }}/edit" class="btn btn-warning">Editar</td>
      <td>
        <form action="{{ route('estudiante.destroy', $es->id) }}" method="POST">
          <input name="_method" type="hidden" value="DELETE">
          {{ csrf_field() }}
          <input type="submit" class="btn btn-danger" value="Eliminar"></input>
        </form>
      </td>
      <td><a href="estudiante/{{ $es->id }}" class="btn btn-success">Ver</td>
    </tr>
    @endforeach
  </tbody>
  @endif

</table>
