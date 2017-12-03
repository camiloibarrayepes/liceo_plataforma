@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Plataforma Liceo - Matriculas 2018</div>

                <div class="panel-body">
                    Lista de estudiantes
                  </br></br>
                    @if(isset($edit))
                      @include('layouts.modificar')
                    @else
                      @include('layouts.tabla')
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
