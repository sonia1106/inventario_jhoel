<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salida_Insumo extends Model
{
    use HasFactory;

    protected $table = 'salida_insumo';
    protected $fillable = [
        'cantidad_salida',
        'fecha_salida',
        'cliente',
    ];
}