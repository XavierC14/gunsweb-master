<?php

namespace App\Models;

use App\Models\pedidos;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class puntoentrega extends Model
{
    use HasFactory;
    public $timestaps = false;
    protected $fillable = [
        'id',
        'tienda',
        'provincia',
        'cp',
        'direccion',
        'encargado',
        'foto',
    ];
    public function pedidos(){
        return $this->belongsTo(pedidos::class);
    }
}
