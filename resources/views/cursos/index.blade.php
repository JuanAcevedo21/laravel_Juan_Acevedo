@extends('layouts.app')

@section('titulo', 'Detallde Curso')

@section('contenido')

<br>
<h3>Crear nuevo curso</h3>
<br>
<div class="row">
    @foreach ($course as $cursito )
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($cursito->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$cursito->nombre}}</h5>
                  <p class="card-text">{{$cursito->descripcion}}</p>
                  <a href="/cursos/{{$cursito->id}}" class="btn btn-success">Ver detalles</a>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
