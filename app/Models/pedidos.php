<?php

namespace App\Models;

use App\Models\user;
use App\Models\material;
use App\Models\puntoentrega;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class pedidos extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'id',
        'metodo_paga',
        'id_punto_entrega',
        'id_material',
        'id_usuario',
        'total',
        'estado'
    ];
    public function material(){
        return $this->belongsTo(material::class);
    }
    public function user(){
        return $this->belongsTo(user::class);
    }
    public function puntoentrega(){
        return $this->belongsTo(puntoentrega::class);
    }
}
