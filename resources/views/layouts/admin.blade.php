<!DOCTYPE html>

<html lang="es">
<head>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <meta name="author" content="sumit kumar"> 
  <title>Sexy Hair Studio |www.Sexy Hair Studios</title> 
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="{{asset('css/admin.css')}}">
  
</head>

<body>
<!--====================== NAVBAR MENU START===================-->
    
  
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        <li class=""><a href="#">Home</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Temas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Cambiar Tema verde</a></li>
            <li><a href="#">Cambiar Tema Azul</a></li>
            <li><a href="#">Cambiar Tema Negro</a></li>
          </ul>
        </li>
        @if(Auth::user()->tipocliente === 1)
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Citas</a></li>
        @endif
        @if(Auth::user()->tipopersonal === 1)
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestionar Servicios <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Servicios</a></li>
            <li><a href="{{URL::action('ProductoController@listaproducto')}}">Productos</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestionar Reportes<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Estadisticas</a></li>
            <li><a href="#">Reportes</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestionar Usuario<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{URL::action('UsuarioController@usuarioget')}}">Registrar Usuario</a></li>
            <li><a href="{{URL::action('UsuarioController@listausuario')}}">Lista Usuarios</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestonar Ventas<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Registrar Ventas</a></li>
            <li><a href="#">Lista Ventas</a></li>
          </ul>
        </li>
        @endif
        <li><a href="{{url('logout')}}">Salir</a></li>
      </ul>
      <form class="navbar-form navbar-right">
      <div class="input-group">        
        <div class="input-group-btn">
          <button class="btn btn-default-1" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
       <input type="text" class="form-control" placeholder="Search" style="background: white;">
      </div>
          
        <span class="cart-heart" style="color: white;"> 
            {{ Auth::user()->nombre }}
        </span>   
    </form>
        
    </div>
  </div>
</nav>

@yield('contenido')

      
  
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@stack('scripts')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
<script src="{{asset('js/producto.js')}}"></script>
</body>
</html>