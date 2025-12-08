<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perro extends Model
{
    use HasFactory;
    protected $table = 'perros';
    protected $fillable = ['user_id','nombre', 'peso', 'raza', 'tipo_comida', 'tamanio', 'sexo', 'foto', 'esterilizado', 'vacunado_al_dia', 'sociable_con_perros','sociable_con_personas','alergias','enfermedades','medicacion','edad','microchip'];
    

}
