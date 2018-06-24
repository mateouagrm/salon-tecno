@extends ('layouts.admin')
@section ('contenido')

 <br><br>
   <div class="container">

<div class="row">
<div class="col-md-8 ">
@include('mensajesucces')
<form class="form-horizontal" action="usuario" method="post"  enctype="multipart/form-data">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<fieldset>

<!-- Form Name -->
<legend>Registro de Usuario</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="carnet">Carnet</label>  
  <div class="col-md-4">
   <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-address-card-o">
        </i>
       </div>
       <input id="Name (Full name)" name="carnet" type="number" placeholder="carnet" class="form-control input-md" required>
      </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nombre">nombre</label>  
  <div class="col-md-4">
   <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user">
        </i>
       </div>
       <input id="Name (Full name)" name="nombre" type="text" placeholder="nombre" class="form-control input-md" required>
      </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="telefono">Telefono</label>  
  <div class="col-md-4">
   <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-phone">
        </i>
       </div>
       <input id="Name (Full name)" name="telefono" type="number" placeholder="telefono" class="form-control input-md" required>
      </div>
  </div>
</div>
 
 <div class="form-group">
  <label class="col-md-4 control-label" for="email">email</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-envelope-o"></i>
       </div>
    <input id="Email Address" name="email" type="email" placeholder="email" class="form-control input-md" required>
      </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="password">password</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-lock"></i>
       </div>
    <input id="Email Address" name="password" type="password" placeholder="password" class="form-control input-md" required>
      </div>
  </div>
</div>


<!-- option --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="tipocliente">Tipo Cliente</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-male"></i>
       </div>
          <select name="tipocliente" class="form-control" required>
            <option value="0">
              0
            </option>
            <option value="1">
              1
            </option>
          </select>
      </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="tipoproveedor">Tipo Proveedor</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-male"></i>
       </div>
          <select name="tipoproveedor" class="form-control" required>
            <option value="0">
              0
            </option>
            <option value="1">
              1
            </option>
          </select>
      </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="tipopersonal">Tipo Personal</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-male"></i>
       </div>
          <select name="tipopersonal" class="form-control" required>
            <option value="0">
              0
            </option>
            <option value="1">
              1
            </option>
          </select>
      </div>
  </div>
</div>


  <div class="form-group">
      <div class="col-md-4">
      <input type="submit" class="btn btn-primary" value="Regístrar">
      </div>
   </div>

</fieldset>
</form>
</div>
 
</div>
   </div>
  
  

@endsection
