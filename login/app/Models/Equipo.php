<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{

    protected $table ='equipos';
    protected $primaryKey ='id';
    protected $fillable =[
        'nombre_equipo','logo','localidad_id'
    ];
    use HasFactory;
    public function localidad(){
        return $this->belongsTo(Localidad::class,'localidad_id','id');
    }
}
