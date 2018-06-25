<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContadorController extends Controller
{

    public function updateView($nombre)
    {
            DB::table('conteo')
                ->where('nombre', $nombre)
                ->increment('cantidad');
            $views = DB::table('conteo as v')
                ->where('nombre', $nombre)->first();

        return json_encode($views);

    }

}
