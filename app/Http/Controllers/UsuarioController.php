<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\HTTP\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use App\Usuario;
use DB;
use Hash;

class UsuarioController extends Controller
{
    public function __construct()
    {
      // $this->middleware('auth');
    }
    
     public function usuarioget()
    {
    	return view('usuario.usuariovista');
    }

    public function usuarioregistrar(Request $request)
    { 
        $user=new Usuario;
        $user->carnet=$request->get('carnet');
        $user->nombre=$request->get('nombre');
        $user->telefono=$request->get('telefono');
        $user->email=$request->get('email');
        $user->password=bcrypt($request->get('password'));
        $user->tipocliente=$request->get('tipocliente');
        $user->tipoproveedor=$request->get('tipoproveedor');
        $user->tipopersonal=$request->get('tipopersonal');
        $user->save();

        return redirect('registrarusuario')->with('msjs',"Se registro correctamente");
    }

    public function listausuario(Request $request)
    {
        if($request){
        $query=trim($request->get('searchText'));
        $usuario=DB::table('users')
        ->where('nombre','LIKE','%'.$query.'%')
        ->orWhere('carnet','LIKE','%'.$query.'%')
        ->orderBy('id','asc')
        ->paginate(7);
        return view('usuario.listausuario',["usuario"=>$usuario,"searchText"=>$query]);
      }
    }

    public function eliminarusuario(Request $request)
    { 
        $id=$request->get('id');
        $usuario = Usuario::find($id);
        $usuario->delete();
        return Redirect:: to('listausuario');
    }

    public function editarusuario(Request $request)
    { 
        $id=$request->get('id');
        $user = Usuario::find($id);
        $user->carnet=$request->get('carnet');
        $user->nombre=$request->get('nombre');
        $user->telefono=$request->get('telefono');
        $user->email=$request->get('email');
        $user->tipocliente=$request->get('tipocliente');
        $user->tipoproveedor=$request->get('tipoproveedor');
        $user->tipopersonal=$request->get('tipopersonal');
        $user->update();
        return Redirect:: to('listausuario');
    }







}
