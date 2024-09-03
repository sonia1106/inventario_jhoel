<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;


class ComprasController extends Controller
{
    public function listarCompras()
    {
        $compras = Compra::all();
        return view('compras.listar_compras', compact('compras'));
    }
    public function create()
    {
        return view('compras.crear_compra');
    }

    
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'insumos_comprados' => 'required|array',
            'catidad' => 'required|array',
            'estado_orden' => 'required|string',
            'fecha_compra' => 'required|date',
        ]);
        Compra::create([
            'fecha_compra' => $request->fecha_compra,
            'insumos_comprados' => json_encode($request->insumos_comprados), // Asegúrate de que sea un JSON si es un array
            'catidad' => array_sum($request->catidad), // O simplemente $request->cantidad si es un solo valor
            'estado_orden' => $request->estado_orden,
            'precio_total' => $request->precio_total ?? 0,
        ]);
        
        return view('compras.crear_compra');
    }
}