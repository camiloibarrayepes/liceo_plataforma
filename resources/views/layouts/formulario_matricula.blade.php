<div class="panel-body">
<!-- Mensajes enviados desde el controlador -->
@if(session()->has('msj'))
    <div class="alert alert-success" role="alert">{{ session('msj') }}</div>
@endif

@if(session()->has('errormsj'))
    <div class="alert alert-danger" role="alert">Error al guardar los datos</div>
@endif

<!-- Si existe la variable estudiantes pero no matriculas, es la primera vez de la matricula -->
@if(isset($estudiantes) and (!isset($matriculas)))
<!-- Primera vez matricula START -->

<form role="form" method="POST" action="{{ url('matricula')}}">
{{ csrf_field() }}

  <input type="hidden" class="form-control" name="est_id" value="{{$estudiantes->id}}">
  <input type="hidden" class="form-control" name="estado" value="0">

  <div class="form-group">
  <label for="exampleInputEmail1">Fecha de matricula</label>
  <input type="date" class="form-control" name="f_matricula" value="">
  @if($errors->has('f_matricula'))
    <span style="color:red;" >{{ $errors->first('f_matricula') }}</span>
  @endif
  </div>

  <div class="form-group">
  <label for="exampleInputPassword1">Valor matricula</label>
  <input type="number" class="form-control" name="valor_matricula" value="" placeholder="Digite el monto a pagar">
  @if($errors->has('valor_matricula'))
    <span style="color:red;" >{{ $errors->first('valor_matricula') }}</span>
  @endif
  </div>

  <div class="form-group">
    <label class="form-check-label">
      Pagó matricula? <small>(Marque esta casilla si la matricula ya ha sido cancelada)</small>
    </label>
    <div class="form-group">
     <select class="form-control" name="estado_matricula">
      <option value="1">si</option>
      <option value="0">no</option>
     </select>
    </div>
  </div>

  <div class="form-group">
    <label class="form-check-label">
      Pagó materiales? <small>(Marque esta casilla si los materiales ya han sido cancelados)</small>
    </label>
    <div class="form-group">
     <select class="form-control" name="estado_materiales">
      <option value="1">si</option>
      <option value="0">no</option>
     </select>
    </div>
  </div>

  <div class="form-group">
    <label class="form-check-label">
      Pagó seguro? <small>(Marque esta casilla si el seguro ya ha sido cancelado)</small>
    </label>
    <div class="form-group">
     <select class="form-control" name="estado_seguro">
      <option value="1">si</option>
      <option value="0">no</option>
     </select>
    </div>
  </div>

  <div class="form-group">
    <label class="form-check-label">
      Pagó bono? <small>(Marque esta casilla si el pago del bono ya ha sido cancelado)</small>
    </label>
    <div class="form-group">
     <select class="form-control" name="estado_bono">
           <option value="1" selected>si</option>
           <option value="0">no</option>
     </select>
    </div>
  </div>

  <div class="form-group">
  <label for="exampleInputPassword1">Observaciones</label>
  <textarea type="text" class="form-control" name="observaciones" placeholder="Escriba observaciones si son necesarias"></textarea>
  @if($errors->has('observaciones'))
    <span style="color:red;" >{{ $errors->first('observaciones') }}</span>
  @endif
  </div>
  <button type="submit" class="btn btn-default">Registrar</button>
</form>
@else

<!-- Primera vez matricula END -->
<!-- si existe la variable matricula, se va a hacer una modificacion de la matricula -->

@if(isset($matriculas))

  @if(($matriculas->estado)==1)
  <h5> La matrícula ya se ha realizado </h5>
  <a href="">Ver</a><br><br>
  @else

  <b>Matricula de: </b>
  <span style="text-transform: capitalize">
    {{ $estudiantes->nombre }} {{ $estudiantes->apellido }}
  </span>
  </br>
  </br>

  <form  role="form" method="POST" action="{{ route('matricula.update', $estudiantes->id) }}">
    <input name="_method" type="hidden" value="PUT">
    {{ csrf_field() }}

  <input type="hidden" class="form-control" name="est_id" value="{{$estudiantes->id}}">
  <input type="hidden" class="form-control" name="estado" value="0">

  <div class="form-group">
  <label for="exampleInputEmail1">Fecha de matricula</label>
  <input type="date" class="form-control" name="f_matricula" value="{{ $matriculas->f_matricula }}">
  @if($errors->has('f_matricula'))
    <span style="color:red;" >{{ $errors->first('f_matricula') }}</span>
  @endif
  </div>

  <div class="form-group">
  <label for="exampleInputPassword1">Valor matricula</label>
  <input type="number" class="form-control" name="valor_matricula" value="{{ $matriculas->valor_matricula }}" placeholder="Digite el monto a pagar">
  @if($errors->has('valor_matricula'))
    <span style="color:red;" >{{ $errors->first('valor_matricula') }}</span>
  @endif
  </div>

  <div class="form-group">
    <label class="form-check-label">
      Pagó matricula? <small>(Marque esta casilla si la matricula ya ha sido cancelada)</small>
    </label>
    <div class="form-group">
   <select class="form-control" name="estado_matricula">
  @if(($matriculas->estado_matricula)==1){
    <option value="1" selected>si</option>
    <option value="0">no</option>
  }@else{
    <option value="1">si</option>
    <option value="0" selected>no</option>
  }@endif

   </select>
 </div>
  </div>

  <div class="form-group">
    <label class="form-check-label">
      Pagó materiales? <small>(Marque esta casilla si los materiales ya han sido cancelados)</small>
    </label>
    <div class="form-group">
   <select class="form-control" name="estado_materiales">
  @if(($matriculas->estado_materiales)==1){
     <option value="1" selected>si</option>
     <option value="0">no</option>
  @else
    <option value="1">si</option>
    <option value="0" selected>no</option>
  }@endif
   </select>
 </div>
  </div>

  <div class="form-group">
    <label class="form-check-label">
      Pagó seguro? <small>(Marque esta casilla si el seguro ya ha sido cancelado)</small>
    </label>
    <div class="form-group">
   <select class="form-control" name="estado_seguro">
  @if(($matriculas->estado_seguro)==1){
    <option value="1" selected>si</option>
    <option value="0">no</option>
 @else
   <option value="1">si</option>
   <option value="0" selected>no</option>
 }@endif
   </select>
 </div>
  </div>

  <div class="form-group">
    <label class="form-check-label">
      Pagó bono? <small>(Marque esta casilla si el pago del bono ya ha sido cancelado)</small>
    </label>
    <div class="form-group">
   <select class="form-control" name="estado_bono">
     @if(($matriculas->estado_bono)==1){
         <option value="1" selected>si</option>
         <option value="0">no</option>
      @else
        <option value="1">si</option>
        <option value="0" selected>no</option>
      }@endif
   </select>
  </div>
  </div>

  <div class="form-group">
  <label for="exampleInputPassword1">Observaciones</label>
  <textarea type="text" class="form-control" name="observaciones" placeholder="Escriba observaciones si son necesarias">{{ $matriculas->observaciones }}</textarea>
  @if($errors->has('observaciones'))
    <span style="color:red;" >{{ $errors->first('observaciones') }}</span>
  @endif
  </div>
  <button type="submit" class="btn btn-default">Registrar</button>
  </form>

  @endif

@endif
@endif
