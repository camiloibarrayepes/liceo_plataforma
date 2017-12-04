@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Plataforma Liceo - Matriculas 2018</div>
                    @include('layouts.formulario_matricula')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
