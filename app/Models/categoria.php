<?php

namespace App\Models;

use App\Models\material;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class categoria extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'tipo'
    ];
    public function material(){
        return $this->belongsTo(material::class);
    }
}
