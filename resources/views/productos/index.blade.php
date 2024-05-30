@extends('layouts.app')

@section('titulo', 'Detalles de los productos')

@section('contenido')
<br>
<h3 class="text-center">Listado de productos disponibles</h3>
<br>
<div class="row">
    @foreach ($producto as $produc)
        <div class="col-sm">
            <div class="card" style="width: 18rem;">
                <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($produc->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$produc->nombre}}</h5>
                  <p class="card-text">{{$produc->descripcion}}</p>
                  <a href="/productos/{{$produc->id}}" class="btn btn-primary">Ver detalles</a>
                </div>
            </div>
            <br>
        </div>
    @endforeach
</div>

@endsection
