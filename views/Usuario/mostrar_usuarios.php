<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
  <link rel="icon" type="image/png" href="<?php echo URL_BASE;?>/public/images/icon.png" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tu Sistema de Ventas</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php echo URL_BASE."/public/assets/css/bootstrap.css";?>" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="<?php echo URL_BASE."/public/assets/css/font-awesome.css";?>" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="<?php echo URL_BASE."/public/assets/js/morris/morris-0.4.3.min.css";?>" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="<?php echo URL_BASE."/public/assets/css/custom.css";?>" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>
    <div id="wrapper">
      <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo URL_BASE;?>/index.php/Inicio/inicio">Sistema de Ventas</a>
        </div>
        <div style="color: white;
          padding: 15px 50px 5px 50px;
          float: right;
          font-size: 16px">
          <?php
              $visit = $_COOKIE['lastVisit'];
          $timeframe = 90 * 60 * 24 * 60 + time();
          setcookie('lastVisit', date("G:i - m/d/y"), $timeframe);
          if(isset($_COOKIE['lastVisit']))
              $visit = $_COOKIE['lastVisit'];
          else
          echo "Welcome to out web page!";
          echo "Último acceso: ". $visit;
          ?>
          <a style="border-radius: 5px" href="#" class="btn btn-danger square-btn-adjust">Salir</a> </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
          <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
              <li class="text-center">
                <img src="<?php echo URL_BASE."/public/assets/img/find_user.png";?>" class="user-image img-responsive"/>
              </li>
              
              
              <li>
                <a class="active-menu" href="<?php echo URL_BASE;?>/index.php/Usuario/usuario_inicio"><i class="fa fa-user fa-3x"></i>Usuarios</a>
              </li>
              <li>
                <a href="<?php echo URL_BASE;?>/index.php/Cliente/cliente_inicio"><i class="fa fa-users fa-3x"></i>Clientes</a>
              </li>
              <li>
                <a  href="<?php echo URL_BASE;?>/index.php/Producto/producto_inicio"><i class="fa fa-shopping-cart fa-3x"></i>Productos</a>
              </li>
              <li  >
                <a   href="<?php echo URL_BASE;?>/index.php/Proveedor/proveedor_inicio"><i class="fa fa-truck fa-3x"></i>Proveedores</a>
              </li>
              <li  >
                <a  href="<?php echo URL_BASE;?>/index.php/Pedido/pedido_inicio"><i class="fa fa-credit-card fa-3x"></i>Pedidos</a>
              </li>
              <li>
                <a href="<?php echo URL_BASE;?>/index.php/Inicio/inicio">
                  <i class="fa fa-bolt fa-3x">
                  <!--::before-->
                  </i>
                  Home
                </a>
              </li>
            </ul>
            
          </div>
          
        </nav>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper" >
          <div id="page-inner">
            <div class="row">
              <div class="col-md-12">
              <?php $errores = $this->getErrores();
                  if(count($errores) > 0):?>
                  <div class="alert alert-danger" role="alert">

                  <?php foreach ($errores as  $error):?>
                      <b><?php echo $error;?></b><br/>
                  <?php endforeach;?>
                  </div>
              <?php endif;?>
                <h2>Menú usuarios</h2>
                <h5>Elige la acción que desees realizar. </h5>
              </div>
            </div>
            <!-- /. ROW  -->
            <hr />
            <div class="row container">
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="panel panel-back noti-box">
                  <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-user"></i>
                  </span>
                  <div class="text-box" >
                    <a  href="<?php echo URL_BASE;?>/index.php/Usuario/guardar_usuario">
                      <p class="main-text">Registrar usuario</p></a>
                      <!--<p class="text-muted">Messages</p>-->
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                  <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-brown set-icon">
                      <i class="fa fa-search"></i>
                    </span>
                    <div class="text-box" >
                      <a  href="<?php echo URL_BASE;?>/index.php/Usuario/mostrar_usuarios">
                        <p class="main-text">Consultar usuario</p></a>
                        <!--<p class="text-muted">Pending</p>-->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container-fluid">
                  <div class="row">
                    
                    
                    <!--<div class="col-md-12">
                      <h4>Bootstrap Snipp for Datatable</h4>
                      <div class="table-responsive">
                        <form action="modificar_cliente" method="POST" role="form">
                          <input class="form-control" placeholder="idCliente " type="text" name="user">
                          <input type="submit" name="submit" value="Modificar">
                        </form>-->
                        <br>
                        
                        <table id="mytable" class="table table-bordred table-striped">
                          
                          <thead>
                            
                            <!--<th><input type="checkbox" id="checkall" /></th>-->
                            <th>Usuario</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Ultima entrada</th>
                            <th>Fecha creacion</th>
                            <th>Activo</th>
                            <th>Edit</th>
                            
                            <th>Delete</th>
                          </thead>
                          <tbody>
                            <!--<?php //echo "holaaa" ?>-->
                            
                            <?php $datos=$this->getDatos();foreach ($datos as $key => $usuario):?>
                            
                            
                            <tr>
                              <!--<?php //echo "holaaaa" ?>-->
                              <td><?php echo $usuario->usuario;?></td>
                              <td><?php echo $usuario->nombre;?></td>
                              <td><?php echo $usuario->apellidos;?></td>
                              <td><?php echo $usuario->ultima_entrada;?></td>
                              <td><?php echo $usuario->fecha_creacion;?></td>
                              <td><?php echo $usuario->activo;?></td>
                              
                              
                              <!--<td><p data-placement="top" data-toggle="tooltip" title="Edit"><a href="<?php //echo URL_BASE;?>/index.php/Cliente/modificar_cliente"><button value="<?php //echo $cliente->dni;?>" class="btn btn-primary btn-xs" onclick="x()" data-title="Edit" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>-->
                              <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button value="<?php echo $usuario->idUsuario;?>" data-toggle="modal" class="btn btn-primary btn-xs prueba" data-title="Edit"  data-target="#edit"><span class="glyphicon glyphicon-pencil"></span></button></a></p></td>
                              <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button value="<?php echo $usuario->idUsuario;?>" class="btn btn-danger btn-xs prueba1" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                            <?php endforeach;?>
                            
                            
                            
                            
                            
                            
                          </tbody>
                          
                        </table>
                        <div class="clearfix"></div>
                        <ul class="pagination pull-right">
                          <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                        </ul>
                        
                      </div>
                      
                    </div>
                  </div>
                </div>
                <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <!--<h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>-->
                      </div>
                      <div class="modal-body" id="modal-edit">
                        <div class="form-group">
                          <input class="form-control " type="text" placeholder="<?php echo $usuario->idUsuario;?>">
                        </div>
                        <div class="form-group">
                          
                          <input class="form-control " type="text" placeholder="Irshad">
                        </div>
                        <div class="form-group">
                          <textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
                          
                          
                        </div>
                      </div>
                      <!--<div class="modal-footer ">-->
                      <!--<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>-->
                      <!--</div>-->
                    </div>
                    <!-- /.modal-content -->
                  </div>
                  <!-- /.modal-dialog -->
                </div>
                
                
                
                <!--<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <h4 class="modal-title custom_align" id="Heading">Eliminando cliente</h4>
                      </div>
                      <div class="modal-body">
                        
                        <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span>¿Está seguro que desea eliminar el cliente <?php //echo $cliente->nombre;?> <?php //echo $cliente->aPaterno;?>?</div>
                        
                      </div>
                      <div class="modal-footer ">
                        <button type="button" class="btn btn-success prueba2" ><span class="glyphicon glyphicon-ok-sign"></span> Si</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> No</button>
                      </div>
                    </div>
                    /.modal-content -->
                    <!--</div>-->
                    <!-- /.modal-dialog -->
                    <!--</div>-->
                    <!-- /. ROW  -->
                    
                    <!-- /. PAGE INNER  -->
                  </div>
                  <!-- /. PAGE WRAPPER  -->
                </div>
                
                
                <!-- /. WRAPPER  -->
                <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
                <!-- JQUERY SCRIPTS -->
                <script src="<?php echo URL_BASE."/public/assets/js/jquery-1.10.2.js";?>"></script>
                <!-- BOOTSTRAP SCRIPTS -->
                <script src="<?php echo URL_BASE."/public/assets/js/bootstrap.min.js";?>"></script>
                <!-- METISMENU SCRIPTS -->
                <script src="<?php echo URL_BASE."/public/assets/js/jquery.metisMenu.js";?>"></script>
                <!-- MORRIS CHART SCRIPTS -->
                <script src="<?php echo URL_BASE."/public/assets/js/morris/raphael-2.1.0.min.js";?>"></script>
                <script src="<?php echo URL_BASE."/public/assets/js/morris/morris.js";?>"></script>
                <!-- CUSTOM SCRIPTS -->
                <script src="<?php echo URL_BASE."/public/assets/js/custom.js";?>"></script>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
                <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
                
                <script type="text/javascript">
                /*$(".prueba1").on("click",function(){
                var input_id = "<input id='object_id' type='hidden' value='"+$(this).val()+"'/>";
                $(".modal-body input[type='hidden']").remove();
                $(".modal-body").append(input_id);
                // $("#delete").load("<?php echo URL_BASE;?>/index.php/Cliente/eliminar_cliente",{identificadoor:$(this).val()});
                });
                $(".prueba2").on("click",function(){
                alert($("#object_id").val());
                alert("holaaaaa");
                $("#delete").load("<?php echo URL_BASE;?>/index.php/Cliente/eliminar_cliente",{identificadorr:$("#object_id").val()});
                });*/
                $(".prueba1").on("click",function(){
                $("#modal-edit").load("<?php echo URL_BASE;?>/index.php/Usuario/eliminar_usuario",{identificadorr:$(this).val()});
                });
                $(".prueba").on("click", function(){
                $("#modal-edit").load("<?php echo URL_BASE;?>/index.php/Usuario/modificar_usuario", {identificador:$(this).val()});
                });
                </script>
                
                
              </body>
            </html>