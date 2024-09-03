<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insumo extends Model
{
    use HasFactory;

    protected $table = 'insumos';
    protected $fillable = [
        'nombre',
        'cantidad',
        'precio_uni',
        'fecha_ingreso',
        'proveedor_id', 
    ];
    public $timestamps = false;
public function proveedor()
{
    return $this->belongsTo(Proveedor::class,);
}
}