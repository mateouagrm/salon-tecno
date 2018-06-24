<div class="modal fade modal-slide-in-right" aria-hidden="true" 
role="dialog" tabindex="-1" id="modal-edit-{{$u->id}}">
<form class="login-form" action="editarusuario" method="post">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
       <div class="modal-dialog modal-md" >
       	 <div class="modal-content">
       	 	<div class="modal-header">
       	 		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
       	 			<span aria-hidden="true">x</span>
       	 		</button>
       	 		<h4 class="modal-title">Editar Usuario {{$u->nombre}}</h4>
       	 	</div>
       	 	 <div class="modal-body">
       	 	  <div class="container">
                        <input name="id" type="text" value="{{$u->id}}" class="hidden">
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-1 control-label" for="carnet">Carnet</label>  
                          <div class="col-md-4">
                           <div class="input-group">
                               <div class="input-group-addon">
                                <i class="fa fa-address-card-o">
                                </i>
                               </div>
                               <input  name="carnet" type="number" placeholder="carnet" class="form-control input-md" value="{{$u->carnet}}" required>
                              </div>
                          </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                          <label class="col-md-1 control-label" for="nombre">nombre</label>  
                          <div class="col-md-4">
                           <div class="input-group">
                               <div class="input-group-addon">
                                <i class="fa fa-user">
                                </i>
                               </div>
                               <input  name="nombre" type="text" placeholder="nombre" class="form-control input-md" value="{{$u->nombre}}" required>
                              </div>
                          </div>
                        </div> 
                        <br><br>
                        <div class="form-group">
                          <label class="col-md-1 control-label" for="telefono">Telefono</label>  
                          <div class="col-md-4">
                           <div class="input-group">
                               <div class="input-group-addon">
                                <i class="fa fa-phone">
                                </i>
                               </div>
                               <input  name="telefono" type="number" placeholder="telefono" class="form-control input-md" value="{{$u->telefono}}" required>
                              </div>
                          </div>
                        </div>
                         <br><br>
                         <div class="form-group">
                          <label class="col-md-1 control-label" for="email">email</label>  
                          <div class="col-md-4">
                          <div class="input-group">
                               <div class="input-group-addon">
                                <i class="fa fa-envelope-o"></i>
                               </div>
                            <input  name="email" type="email" placeholder="email" class="form-control input-md" value="{{$u->email}}" required>
                              </div>
                          </div>
                        </div>
                        <br><br>
                         <!-- option --> 
                        <div class="form-group">
                          <label class="col-md-1 control-label" for="tipocliente">Tipo Cliente</label>  
                          <div class="col-md-4">
                          <div class="input-group">
                               <div class="input-group-addon">
                                <i class="fa fa-male"></i>
                               </div>
                                  <select name="tipocliente" class="form-control" required>
                                    <option value="{{$u->tipocliente}}">{{$u->tipocliente}}</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                  </select>
                              </div>
                          </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                          <label class="col-md-1 control-label" for="tipoproveedor">Tipo Proveedor</label>  
                          <div class="col-md-4">
                          <div class="input-group">
                               <div class="input-group-addon">
                                <i class="fa fa-male"></i>
                               </div>
                                  <select name="tipoproveedor" class="form-control" required>
                                    <option value="{{$u->tipoproveedor}}">{{$u->tipoproveedor}}</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                  </select>
                              </div>
                          </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                          <label class="col-md-1 control-label" for="tipopersonal">Tipo Personal</label>  
                          <div class="col-md-4">
                          <div class="input-group">
                               <div class="input-group-addon">
                                <i class="fa fa-male"></i>
                               </div>
                                  <select name="tipopersonal" class="form-control" required>
                                    <option value="{{$u->tipopersonal}}">{{$u->tipopersonal}}</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                  </select>
                              </div>
                          </div>
                        </div>
                    </div>
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