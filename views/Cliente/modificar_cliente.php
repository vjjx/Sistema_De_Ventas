
    
        <div class="row text-center  ">
            <div class="col-md-12">
                <h2>Modificar cliente</h2>
                <!--<h5>(Registre todos sus clientes)</h5>-->
                 
            </div>
        </div>        
         
         <div class="row">
               
                <div class="col-md-12 col-sm-12 ">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>Cliente</strong>  
                        
                            </div>
                            <?php $c = $this->getDatos(); $d=$this->getDatos1(); $var=$this->getDatos2(); ?>
                                                       

                            <div class="panel-body">
                              <!--<div class="alert alert-danger" role="alert"><?php //echo $this->errores['global']?></div>-->
                                <form role="form" class="form" id="form1" method="POST" action="<?php echo URL_BASE;?>/index.php/Cliente/actualizar_cliente">
                                        <div class="form-group input-group <?php if (isset($this->errores['dni'])) echo 'has-error' ; ?>">
                                            <!--<span class="input-group-addon"><i class="fa fa-genderless"></i></span>-->
                                            <input class="form-control" name="dni" id="dni" placeholder="dni"  type="hidden" value="<?php echo $var['identificador'];?>">
                                            <?php if(isset($this->errores['dni'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['dni'];?></span><?php endif;?>
                                        </div>
                                        <div class="form-group input-group <?php if (isset($this->errores['nombre'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="nombre" id="nombre" placeholder="Nombre"  type="text" value="<?php echo $c->nombre;?>">
                                            <?php if(isset($this->errores['nombre'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['nombre'];?></span><?php endif;?>
                                        </div>
                                        <div class="form-group input-group <?php if (isset($this->errores['aPaterno'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="aPaterno" id="aPaterno" placeholder="Apellido Paterno" type="text" value="<?php echo $c->aPaterno;?>">
                                            <?php if(isset($this->errores['aPaterno'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['aPaterno'];?></span><?php endif;?>
                                        </div>
                                         <div class="form-group input-group <?php if (isset($this->errores['aMaterno'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="aMaterno" id="aMaterno" placeholder="Apellido Materno" type="text" value="<?php echo $c->aMaterno;?>">
                                            <?php if(isset($this->errores['aMaterno'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['aMaterno'];?></span><?php endif;?>
                                        </div>
                                      <div class="form-group input-group <?php if (isset($this->errores['fechaNacimiento'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="fechaNacimiento" id="fechaNacimiento" placeholder="Fecha de Nacimiento" type="text" value="<?php echo $c->fechaNacimiento;?>">
                                            <?php if(isset($this->errores['fechaNacimiento'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['fechaNacimiento'];?></span><?php endif;?>
                                        </div>


                                      <div class="form-group input-group <?php if (isset($this->errores['ciudad'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="ciudad" id="ciudad" placeholder="Ciudad" type="text" value="<?php echo $d->ciudad;?>">
                                            <?php if(isset($this->errores['ciudad'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['ciudad'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['cp'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="cp" id="cp" placeholder="C.P." type="number" value="<?php echo $d->cp;?>">
                                            <?php if(isset($this->errores['cp'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['cp'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['colonia'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="colonia" id="colonia" placeholder="Colonia" type="text" value="<?php echo $d->colonia;?>">
                                            <?php if(isset($this->errores['colonia'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['colonia'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['calle'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="calle" id="calle" placeholder="Calle" type="text" value="<?php echo $d->calle;?>">
                                            <?php if(isset($this->errores['calle'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['calle'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['numero'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="numero" id="numero" placeholder="Numero" type="number" value="<?php echo $d->numero;?>">
                                            <?php if(isset($this->errores['numero'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['numero'];?></span><?php endif;?>
                                        </div>

                                        <div class="form-group input-group <?php if (isset($this->errores['detalle'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="detalle" id="detalle" placeholder="Detalles" type="text" value="<?php echo $d->detalle;?>">
                                            <?php if(isset($this->errores['detalle'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['detalle'];?></span><?php endif;?>
                                        </div>


                                        <!--<div class="form-group input-group">
                                          <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                          <label for="usuario">Usuario</label>-->
                                          <!--<select class="form-control" name="usuario" id="usuario">
                                            <?php //foreach($direcciones as $direccion):?>
                                              <option value="<?php //echo $direccion->idDireccion;?>"><?php //echo $direccion->nombre." ".$usuario->apellidos;?></option>
                                            <?php //endforeach;?>
                                          </select>
                                        </div>-->


                                        <!--<div class="form-group input-group <?php //if (isset($this->errores['DIRECCION_idDireccion'])) echo 'has-error' ; ?>">
                                            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
                                            <input class="form-control" name="DIRECCION_idDireccion" id="DIRECCION_idDireccion" placeholder="" type="number">
                                            <?php //if(isset($this->errores['DIRECCION_idDireccion'])) :?> <span id="helpBlock" class="help-block"><?php //echo $this->errores['DIRECCION_idDireccion'];?></span><?php //endif;?>
                                        </div>-->
                                     
                                     
                                     <!--<a href="index_usuarios.html" class="btn btn-success ">Guardar</a>-->
                                     <button name="enviarDatos" id="sendBtn" type="submit" class="btn btn-warning btn-lg" style="width: 100%"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
