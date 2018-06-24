<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table='cita';

    protected $primaryKey='id_cita';

    public $timestamps=false;

    protected $fillable=[
        'fechahora',
        'costototal',
        'id_usuario'
    ];

    protected $guarded=[

    ];
}
