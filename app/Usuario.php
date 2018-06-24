<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='users';

    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable=[
    
         'carnet',
         'nombre',
         'telefono',
         'email',
         'password',
         'tipocliente',
         'tipoproveedor',
         'tipopersonal'
    ];


    protected $guarded=[

    ];

}
