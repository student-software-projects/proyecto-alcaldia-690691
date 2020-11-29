<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $table ='jugadores';
    protected $primaryKey ='id';
    protected $fillable =[
        'nombres','apellidos','numero_camisa','apodo','equipos_id'
    ];
    use HasFactory;
    public function equipos()
    {
        return $this->belongsTo(Equipo::class,'equipos_id','id');
    }
}
