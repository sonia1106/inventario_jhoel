<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class InsumoComprado extends Model
{
    protected $fillable = [
        'compra_id', 'insumo', 'cantidad'
    ];

    public function compra()
    {
        return $this->belongsTo(Compra::class);
    }
}
