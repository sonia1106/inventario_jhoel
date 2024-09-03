<?php
namespace App\Http\Controllers;
use App\Models\Persona;
use Illuminate\Http\Request;

class EmpleadosController extends Controller{

    public function ListarEmpleados()
    {
        $personas = Persona:: all();
        return view('empleados.listar_empleado', compact('personas'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:100',
            'apellidos' => 'required|string|max:200',
            'puesto' => 'required|string|max:100',
            'edad' => 'required|numeric|min:0',
            'telefono' => 'nullable|string|max:100',
            'direccion' => 'required|string|max:150',
            'correo_electronico' => 'required|email|max:150',
            'fecha_nacimiento' => 'required|date',
        ]);

        Persona::create($validatedData);

        return view('empleados.registrar_empleado');
    }

    public function create()
    {
        return view('empleados.registrar_empleado');
    }
}