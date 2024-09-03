<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $fillable = [
        'nombre',
        'apellidos',
        'puesto',
        'edad',
        'telefono',
        'direccion',
        'correo_electronico',
        'fecha_nacimiento',
    ];
    public $timestamps = false;
}