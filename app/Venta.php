<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='venta';

    protected $primaryKey='id_venta';

    public $timestamps=false;

    protected $fillable=[
        'fecha',
        'costototal',
        'id_cita'
    ];

    protected $guarded=[

    ];
}
