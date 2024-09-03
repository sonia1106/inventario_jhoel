<?php
namespace App\Http\Controllers;
use App\Models\Proveedor;
use Illuminate\Http\Request;


class ProveedoresController extends Controller{
    public function ListarProveedores()
    {
        $proveedores = Proveedor:: all();
        return view('proveedores.listar_proveedores', compact('proveedores'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:100',
            'direccion' => 'required|string|max:100',
            'telefono' => 'required|string|max:100',
            'correo_electronico' => 'required|string|email|max:100',
            'productos' => 'required|string|max:200',
        ]);
    
        Proveedor::create($validatedData);
    
        return view('proveedores.registrar_proveedor');
    } 
    public function create()
    {
        return view('proveedores.registrar_proveedor');
    }
}
