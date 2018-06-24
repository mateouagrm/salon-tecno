<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Input;
use App\HTTP\Requests;
use DB;
use Hash;
use App\Usuario;
use App\User;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

  //  use AuthenticatesAndRegistersUsers, ThrottlesLogins;
   // use AuthenticatesAndRegistersUsers;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
 //   public function __construct(){
   //     $this->middleware('guest', ['except' => 'getLogout']);
   // }
  

    public function __construct(Guard $auth)
    {
         $this->auth = $auth;
         $this->middleware('guest', ['except' => 'getLogout']);

      
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   


//login

   protected function getLogin()
    {
        return view('login');
    }


    

        public function postLogin(Request $request)
          {
            $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
             ]
            );
                $credentials = $request->only('email', 'password');
                   if ($this->auth->attempt($credentials, $request->has('remember')))
                         { 
                        
                               return redirect('salon');
                  
                         }else{
                             return redirect('/')->with('msjs',"email o contraseña incorrectos");
                                   
                        } 
           
          }

//register
    protected function getRegister()
    {
        return view("register");
    }


    public function postRegister(Request $request)
    {
    
        $user=new Usuario;
        $user->carnet=$request->get('carnet');
        $user->nombre=$request->get('nombre');
        $user->telefono=$request->get('telefono');
        $user->email=$request->get('email');
        $user->password=bcrypt($request->get('password'));
        $user->tipocliente=1;
        $user->tipoproveedor=0;
        $user->tipopersonal=0;
        $user->save();

        return Redirect::to('/')->with('msjs', 'REGISTRADO '); 
             
    }


//salir
protected function getLogout()
    {
        
      $this->auth->logout();

        return redirect('/');  
        
    }




}
