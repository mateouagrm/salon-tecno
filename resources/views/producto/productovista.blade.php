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
<legend>Registro de Producto</legend>

<!-- Text input-->
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
  <label class="col-md-4 control-label" for="nombre">marca</label>  
  <div class="col-md-4">
   <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-circle">
        </i>
       </div>
       <input id="Name (Full name)" name="marca" type="text" placeholder="marca" class="form-control input-md" required>
      </div>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="telefono">Costo</label>  
  <div class="col-md-4">
   <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-money">
        </i>
       </div>
       <input id="Name (Full name)" name="costo" type="number" placeholder="costo" class="form-control input-md" required>
      </div>
  </div>
</div>
 


<div class="form-group">
  <label class="col-md-4 control-label" for="auto">Proveedor</label>  
  <div class="col-md-4">
  <div class="input-group">
       <div class="input-group-addon">
        <i class="fa fa-user"></i>
       </div>
          <select name="id_usuario" class="form-control" required>
          <option selected="true"  disabled="disabled">seleccione un proveedor</option>
          @foreach($usuario as $u)
          @if ($u->tipoproveedor === 1)
            <option value="{{$u->id}}">
            {{$u->nombre}}
             </option>
          @endif
          @endforeach 
          </select>
      </div>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="foto">foto</label>
  <div class="col-md-4">
    <input  id="f" name="foto" class="input-file" type="file" required>
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

<div class="form-group" >
  <div class="input-group">
    <div style="padding-left: 20%;">
      <img src="http://websamplenow.com/30/userprofile/images/avatar.jpg" id="i"  alt="avatar"  
          style=" width: 200px; height: 200px;" >
    </div>
  </div>
</div>
</div>
   </div>


@endsection
