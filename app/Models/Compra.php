<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compras';
    protected $fillable = [
        'fecha_compra',
        'insumos_comprados',
        'catidad',
        'precio_total',
        'estado_orden',
        
    ];
    public $timestamps = false;
    public function getPrecioTotalAttribute($value)
    {
        return $value ?? 0; 
    }
    
}