<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrucelController extends Controller
{
    

// Muestra el formulario
    public function create()
    {
        return view('contenido.create');
    }

 public function store(Request $request)
{
    $request->validate([
        'titulo' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'imagen' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

 if ($request->hasFile('imagen')) {
    $imagen = $request->file('imagen');
    $nombreImagen = time() . '_' . $imagen->getClientOriginalName();

    $imagen->move(
        base_path('../quiropracticos_shine/public/images/carrucel'),
        $nombreImagen
    );
}

    \App\Models\CarrucelModel::create([
        'titulo' => $request->titulo,
        'descripcion' => $request->descripcion,
        'imagen' => $nombreImagen,
    ]);

    return redirect()->back()->with('success', 'Contenido creado correctamente');
}




}
