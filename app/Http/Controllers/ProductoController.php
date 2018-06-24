<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HTTP\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Producto;
use App\Usuario;
use DB;
use Hash;

class ProductoController extends Controller
{

	public function __construct()
    {
      // $this->middleware('auth');
    }

    public function listaproducto(Request $request)
    {
        if($request){
        $query=trim($request->get('searchText'));
        $producto=DB::table('producto')
        ->where('nombre','LIKE','%'.$query.'%')
        ->orWhere('marca','LIKE','%'.$query.'%')
        ->orderBy('id_producto','asc')
        ->paginate(7);
        return view('producto.listaproducto',["producto"=>$producto,"searchText"=>$query]);
      }
    }

    public function productoget()
    {
        $usuario = Usuario::all();
    	return view('producto.productovista',["usuario"=>$usuario]);
    }


}
