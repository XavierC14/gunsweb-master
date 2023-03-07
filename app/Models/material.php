<?php

namespace App\Models;

use App\Models\pedidos;
use App\Models\categoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class material extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'id',
        'foto',
        'nombre',
        'marca',
        'descripcion',
        'cantidad',
        'precio',
        'id_categoria'
    ];
    public function categoria(){
        return $this->belongsTo(categoria::class);
    }
    public function pedidos(){
        return $this->belongsTo(pedidos::class);
    }
}
