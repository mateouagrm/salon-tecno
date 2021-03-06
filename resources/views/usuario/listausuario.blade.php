@extends ('layouts.admin')
@section ('contenido')


<div class="container">
     <div class="row">
       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
         <h3>Listado de Usuarios</h3>
         @include('usuario.search')
       </div>
   </div>
   <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover">
          <tr class="success">
            <th>Id</th>
            <th>Carnet</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Opciones</th>
          </tr>
                 @foreach ($usuario as $u)
                   <tr>
                     <td>{{$u->id}}</td>
                     <td>{{$u->carnet}}</td>
                     <td>{{$u->nombre}}</td>
                     <td>{{$u->telefono}}</td>
                     <td>{{$u->email}}</td>
                     @if ($u->tipocliente === 1)
                     <td>Cliente</td>
                     @endif
                     @if ($u->tipoproveedor === 1)
                     <td>Proveedor</td>
                     @endif
                     @if ($u->tipopersonal === 1)
                     <td>Personal</td>
                     @endif
                     <td>
                      <a href="#" data-target="#modal-edit-{{$u->id}}" data-toggle="modal"><button class="btn btn-info">Editar</button></a>
                      <a href="#" data-target="#modal-delete-{{$u->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                     </td>
                   </tr>
                   @include('usuario.modal')
                   @include('usuario.modaledit')
                   @endforeach 
        </table>
      </div>
       
     </div>
   </div>

</div>



<div id="posts" style="  position: fixed;
        width: 250px;
        height: 40px;
        bottom: 0;
        right: 10px;
        background-color: #3b5e95;
        color: white;
        z-index: 1000;
        text-align: center;
        line-height: 40px;
        border-radius: 20px 20px 0 0;
        cursor: pointer;">
    <strong id="contador">

    </strong>
</div>


@push('scripts')
<script>
    var url = 'conteo/listausuario';
    $.get(url,function(resul){
        var datos= jQuery.parseJSON(resul);
       console.log(datos);
        document.getElementById("contador").innerHTML = datos.cantidad  + '   visitas';
    })
</script>
@endpush
  
@endsection
