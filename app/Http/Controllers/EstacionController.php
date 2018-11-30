<?php

namespace App\Http\Controllers;

use App\Estacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstacionController extends Controller
{
    public function index()
    {

        $estacions = Estacion::all()->sortBy('id');
        $title = 'Estacion';       
        return view('estaciones.index',compact('title','estacions'));
    }

    public function show(Estacion $estacion)
    {
        return view('estaciones.show',compact('estacion'));
    }

    public function create()
    {
        return view('estaciones.create');
    }

    public function store()
    {
        $data = request()->validate([
            'codigo' => 'required',
            'nombre' => 'required|max:32',
            'descripcion' => 'required|min:3',
            'nombre_responsable' => 'required|max:32',
            'email_responsable' => ['required','email','unique:users,email'],
            'estatus' => '',
        ],[
            'codigo.required' => 'El campo Código es obligatorio',
            'nombre.required' => 'El campo Nombre es obligatorio',
            'descripcion.required' => 'El campo Descripcion es obligatorio y debe escribir al menos 3 caracteres',
            'nombre_responsable.required' => 'El campo Nombre del Responsable es obligatorio',
            'email_responsable.required' => 'El campo Correo Electrónico es obligatorio'
        ]);

        Estacion::create([
            'codigo' => $data['codigo'],
            'nombre' => $data['nombre'],
            'descripcion' => $data['descripcion'],
            'nombre_responsable' => $data['nombre_responsable'],
            'email_responsable' => $data['email_responsable'],
            'estatus' => $data['estatus'],
        ]);
        return redirect()->route('estaciones.index');
    }

    public function edit(Estacion $estacion)
    {
        return view('estaciones.edit',['estacion'=>$estacion]);
    }

    public function update(Estacion $estacion)
    {
        $data = request()->validate([
            'codigo' => 'required',
            'nombre' => 'required|max:32',
            'descripcion' => 'required|min:3',
            'nombre_responsable' => 'required|max:32',
            'email_responsable' => ['required','email','unique:users,email'],
            'estatus' => '',
        ],[
            'codigo.required' => 'El campo Código es obligatorio',
            'nombre.required' => 'El campo Nombre es obligatorio',
            'descripcion.required' => 'El campo Descripcion es obligatorio y debe escribir al menos 3 caracteres',
            'nombre_responsable.required' => 'El campo Nombre del Responsable es obligatorio',
            'email_responsable.required' => 'El campo Correo Electrónico es obligatorio'
        ]);

        $estacion->update($data);
        return redirect()->route('estaciones.show',['estacion'=>$estacion]);
    }

    function destroy(Estacion $estacion)
    {
        $estacion->delete();
        return redirect()->route('estaciones.index');
    }
}
