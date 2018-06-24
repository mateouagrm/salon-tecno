<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sexy Hair Studio |www.Sexy Hair Studios</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
  </head>

  <body>

    <section class="login-block">
      <div class="container">
        @include('mensajesucces')
        <div class="row">

            <div class="col-md-4 login-sec">
              <h2 class="text-center">Identidad</h2>
                <form class="login-form" action="login" method="post">
                  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group" >
                      <label for="email" class="text-uppercase">Email</label>
                      <input type="email" class="form-control" placeholder="escribe tu email" name="email" required>
                    </div>
                    <div class="form-group">
                      <label for="password" class="text-uppercase">Password</label>
                      <input type="password" class="form-control" placeholder="escribe tu contraseñas" name="password" required>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-login">Ingresar</button>
                    </div>
                </form>
                <div class="text-center">
                      <a href="{{URL::action('Auth\AuthController@getRegister')}}"><button class="btn btn-link float-lefth">Crear cuenta</button></a>
                </div>
               <div class="copy-text">Created by Sexy Hair Studios.com
               </div>
             </div>

              <div class="col-md-8 banner-sec">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <img class="d-block img-fluid" src="https://static.pexels.com/photos/33972/pexels-photo.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                          <div class="banner-text">
                              <h2>This is Heaven</h2>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                          </div>  
                        </div>
                      </div>
                  </div>        
                </div>
              </div>

        </div>
      </div>
    </section>
    

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  </body>
</html>
