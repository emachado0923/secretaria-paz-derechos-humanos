<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Informacion_personal extends Model
{
    protected $table = 'informacion_personal';
    protected $primaryKey = 'id_usuario';
    protected $fillable = ['tipo_inhumacion','tipo_cuerpo','contrato','cementerio', 
    'certificado_defuncion','tipo_documento','numero_documento','primer_nombre','segundo_nombre','apellido_paterno', 'apellido_materno', 
    'fecha_nacimiento', 'genero', 'sexo','nombre_padre','nobre_madre'];

    public $timestamps = true;
}
