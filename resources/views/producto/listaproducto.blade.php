@extends ('layouts.admin')
@section ('contenido')


<div class="container">
     <div class="row">
       <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
         <h3>Listado de Productos<a href="{{URL::action('ProductoController@productoget')}}"><button class="btn btn-primary">Nuevo Producto</button></a></h3>
         @include('producto.search')
       </div>
   </div>
   <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <div class="table-responsive">
        <table class="table table-striped table-bordered table-condensed table-hover">
          <tr class="success">
            <th>Id</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Costo</th>
            <th>Foto</th>
            <th>Proverdor</th>
            <th>Opciones</th>
          </tr>
                 @foreach ($producto as $p)
                   <tr>
                     <td>{{$p->id_usuario}}</td>
                     <td>{{$p->nombre}}</td>
                     <td>{{$p->marca}}</td>
                     <td>{{$p->costo}}</td>
                     <td>{{$p->foto}}</td>
                     <td>{{$p->ci_usuario}}</td>
                      <a href="#" data-target="#modal-edit-{{$u->id}}" data-toggle="modal"><button class="btn btn-info">Editar</button></a>
                      <a href="#" data-target="#modal-delete-{{$u->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                     </td>
                   </tr>
              
                   @endforeach 
        </table>
      </div>
       
     </div>
   </div>

</div>

  
@endsection
