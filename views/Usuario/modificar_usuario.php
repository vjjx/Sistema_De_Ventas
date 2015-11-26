<div class="row text-center  ">
  <div class="col-md-12">
    <h2> Modificar usuario</h2>
    
    <!--<h5>( Regístrate para poder acceder al sistema)</h5>-->
    
  </div>
</div>
<div class="row">
  
  <div class="col-md-12 col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        <strong>Usuario</strong>
      </div>
      <?php $u = $this->getDatos(); $var=$this->getDatos1();?>
      <div class="panel-body">
        <form role="form" class="form" id="form1" method="POST" action="<?php echo URL_BASE;?>/index.php/Usuario/actualizar_usuario">        
          <div class="form-group input-group <?php if (isset($this->errores['idUsuario'])) echo 'has-error' ; ?>">
            <!--<span class="input-group-addon"><i class="fa fa-user"></i></span>-->
            <input class="form-control" name="idUsuario" id="idUsuario" placeholder="idUsuario" type="hidden" value="<?php echo $var['identificador'];?>">
            <?php if(isset($this->errores['idUsuario'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['idUsuario'];?></span><?php endif;?>
          </div>        
          <div class="form-group input-group <?php if (isset($this->errores['usuario'])) echo 'has-error' ; ?>">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input class="form-control" name="usuario" id="usuario" placeholder="Usuario" type="text" value="<?php echo $u->usuario;?>">
            <?php if(isset($this->errores['usuario'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['usuario'];?></span><?php endif;?>
          </div>
          <div class="form-group input-group <?php if (isset($this->errores['contrasenya'])) echo 'has-error' ; ?>">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input class="form-control" name="contrasenya" id="contrasenya" placeholder="Password" type="text" value="<?php echo $u->contrasenya;?>">
            <?php if(isset($this->errores['contrasenya'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['contrasenya'];?></span><?php endif;?>
          </div>
          <div class="form-group input-group <?php if (isset($this->errores['nombre'])) echo 'has-error' ; ?>">
            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
            <input class="form-control" name="nombre" id="nombre" placeholder="Nombre" type="text" value="<?php echo $u->nombre;?>">
            <?php if(isset($this->errores['nombre'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['nombre'];?></span><?php endif;?>
          </div>
          <div class="form-group input-group <?php if (isset($this->errores['apellidos'])) echo 'has-error' ; ?>">
            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
            <input class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos" type="text" value="<?php echo $u->apellidos;?>">
            <?php if(isset($this->errores['apellidos'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['apellidos'];?></span><?php endif;?>
          </div>
          <div class="form-group input-group <?php if (isset($this->errores['activo'])) echo 'has-error' ; ?>">
            <span class="input-group-addon"><i class="fa fa-genderless"></i></span>
            <input class="form-control" name="activo" id="activo" placeholder="Activo" type="text" value="<?php echo $u->activo;?>">
            <?php if(isset($this->errores['activo'])) :?> <span id="helpBlock" class="help-block"><?php echo $this->errores['activo'];?></span><?php endif;?>
          </div>
          
          <button name="enviarDatos" id="sendBtn" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Guardar</button>
          <!--<a onClick="if(confirm('¿Desea registrar este usuario?'))
            alert('Guardado');
            else alert('No Guardado')" data-toggle="modal" class="btn btn-success" type="submit" data-target="#myModal"><span class="glyphicon glyphicon-plus"></span> Guardar</a>-->
            <hr>
            ¿Ya estás registrado?  <a href="<?php echo URL_BASE;?>/index.php/Inicio/login">Entra aquí</a>
          </form>
        </div>
        
      </div>
    </div>
    
    
  </div>