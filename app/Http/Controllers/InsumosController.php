<?php

namespace App\Http\Controllers;

use App\Models\Insumo;
use Illuminate\Http\Request;
use App\Models\Proveedor;


class InsumosController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:100',
            'cantidad' => 'required|numeric|min:0',
            'precio_uni' => 'nullable|numeric|min:0',
            'fecha_ingreso' => 'required|date',
            'proveedor' => 'required|exists:proveedores,id', 
        ]);

       

        $insumo = new Insumo($validatedData);
        $insumo->proveedor_id = $request->proveedor;        
        $insumo->save();

        $proveedores = Proveedor::all();  
        return view('insumos.registrar_insumo', compact('proveedores'));
    }
    public function create()
    {
        $proveedores = Proveedor::all();  
        return view('insumos.registrar_insumo', compact('proveedores'));   
    }

    public function listarInsumos(Request $request)
    {
        
        $sort = $request->get('sort', 'fecha_ingreso');
        $direction = $request->get('direction', 'asc'); 

        $direction = $request->get('direction', 'asc');
        $nextDirection = $direction === 'asc' ? 'desc' : 'asc';
         $insumos = Insumo::orderBy($request->get('sort', 'nombre'), $direction)->get();
        return view('insumos.listar_insumos', compact('insumos', 'sort', 'direction', 'nextDirection'));
    }
    public function EliminarInsumo($id)
    {
        $insumo = Insumo::findOrFail($id);
        $insumo->delete();
        return redirect()->route('insumos.listar')->with('success', 'Insumo eliminado correctamente.');
    }
    public function edit($id)
    {
        $proveedores = Proveedor::all(); 
        $insumo = Insumo::findOrFail($id);
        return view('insumos.editar', compact('insumo','proveedores'));
    }
    public function update(Request $request, $id)
{
    $request->validate([
        'nombre' => 'required|string|max:255',
        'cantidad' => 'required|integer',
        'precio_uni' => 'required|numeric',
        'fecha_ingreso' => 'required|date',
    ]);

    $insumo = Insumo::findOrFail($id);
    $insumo->update($request->all());

    return redirect()->route('insumos.listar')->with('success', 'Insumo actualizado correctamente.');
}
}
