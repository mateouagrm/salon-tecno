<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='producto';

    protected $primaryKey='id_producto';

    public $timestamps=true;

    protected $fillable=[
    
         'nombre',
         'marca',
         'costo',
         'foto',
         'id_usuario'
    ];


    protected $guarded=[

    ];
}
