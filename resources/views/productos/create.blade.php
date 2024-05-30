@extends('layouts.app')

@section('titulo','Producto')


@section('contenido')
    <br>
    <h3>Agregar productos</h3>
    <br>
    <form action="/productos" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="nombreproducto" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-4">
            <label for="descripcion" class="form-label">Descripcion del producto</label>
            <input type="text" class="form-control" id="descripcion" name="descripcion">
        </div>
        <br>
        <button type="submit" class="btn btn-info">Guardar</button>
    </form>


@endsection
