<div class="modal fade modal-slide-in-right" aria-hidden="true" 
role="dialog" tabindex="-1" id="modal-delete-{{$u->id}}">
<form class="login-form" action="eliminarusuario" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
       <div class="modal-dialog modal-sm" >
       	 <div class="modal-content">
       	 	<div class="modal-header">
       	 		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
       	 			<span aria-hidden="true">x</span>
       	 		</button>
       	 		<h4 class="modal-title">Eliminar Usuario</h4>
       	 	</div>
       	 	 <div class="modal-body">
       	 	 	<p>confirme si desea eiminar usuario {{$u->nombre}}</p>
                        <input name="id" type="text" value="{{$u->id}}" class="hidden">
       	 	 </div>
       	 	 <div class="modal-footer">
       	 	 	<button type="button" class="btn btn-default"
       	 	 	data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Confirmar</button>
       	 	 </div>
       	 </div>
       </div>
 </form> 
</div>