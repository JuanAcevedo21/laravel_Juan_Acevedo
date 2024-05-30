<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $producto = Producto::all();
        return view('productos.index', compact('producto'));
    }


    public function create()
    {
        return view('productos.create');
    }


    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');

        $producto->save();
        return 'Guardado exitoso';
    }


    public function show(string $id)
    {

    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
