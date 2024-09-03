<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';
    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'correo_electronico',
        'productos',
    ];
    public $timestamps = false;
}