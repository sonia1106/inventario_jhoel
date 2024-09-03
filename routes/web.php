<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmpleadosController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\InsumosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ComprasController;

// Rutas para proveedores
Route::get('/proveedores/listar_proveedores', [ProveedoresController::class, 'ListarProveedores'])
    ->name('proveedores.listar');
Route::get('/proveedores/registrar_proveedor', [ProveedoresController::class, 'create'])
    ->name('proveedor.create');
Route::post('/proveedores', [ProveedoresController::class, 'store'])
    ->name('proveedor.store');

// Rutas para compras
Route::get('/compras/listar_compras', [ComprasController::class, 'listarCompras'])
    ->name('compras.listar');
Route::get('/compras/crear_compra', [ComprasController::class, 'create'])
    ->name('compras.create');
Route::post('/compras', [ComprasController::class, 'store'])
    ->name('compras.store');

// Rutas para insumos
Route::post('/insumos', [InsumosController::class, 'store'])
    ->name('insumos.store');
Route::get('/insumos/listar_insumos', [InsumosController::class, 'listarInsumos'])
    ->name('insumos.listar');
Route::get('/insumos/registrar_insumo', [InsumosController::class, 'create'])
    ->name('insumos.create');
Route::delete('/insumos/{id}',[InsumosController::class, 'EliminarInsumo'])
    ->name('insumos.eliminar');
Route::get('/insumos/{id}/editar', [InsumosController::class, 'edit'])
->name('insumos.editar');
    // Actualizar el insumo
Route::put('/insumos/{id}', [InsumosController::class, 'update'])
->name('insumos.actualizar');

// Rutas para empleados
Route::get('/empleados/listar_empleado', [EmpleadosController::class, 'ListarEmpleados'])
    ->name('empleados.listar');
Route::get('/empleados/registrar_empleado', [EmpleadosController::class, 'create'])
    ->name('empleados.create');
Route::post('/empleados', [EmpleadosController::class, 'store'])
    ->name('empleados.store');

// Ruta para el dashboard
Route::get('/index', [DashboardController::class, 'index'])
    ->name('inicio');

// Rutas de autenticación
Route::get('/register', [AuthController::class, 'showRegisterForm'])
    ->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Ruta para el logout
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Redirigir a login si no está autenticado
Route::get('/', function () {
    return redirect('/login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');




