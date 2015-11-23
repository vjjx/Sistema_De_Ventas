<?php
	namespace controllers;	
	use libs\Controller;
	use libs\View;

	class Producto extends Controller{

		public function __construct(){
			parent::__construct();
			$this->loadModel();

			
		}

		public function mostrar_productos(){
			try{
			$productos=$this->model->listarProductos();
			$this->view->render(explode("\\",get_class($this))[1], "mostrar_productos", $productos,$this->getErrores());
		}
			catch (Exception $e) {
							View::renderErrors(array($e->getMessage()));
						}
		}


		public function modificar_producto($params=array()){
			try{
			if(count($params) > 0){
				$p = $this->model->getProductoById($params['identificador']);
				//$d = $this->model->getClienteDireccionById($params['identificador']);
				//$var = $params['identificador'];

				//var_dump($d);
				if(empty($p)){
					View::renderErrors(array("No existe el producto con identificador ".$params['identificador']));
				}
				else{
					$this->view->render(explode("\\",get_class($this))[1], "modificar_producto", $p[0], $this->getErrores());
					//if(isset($params['nombre']) && isset($params['aPaterno']) && isset($params['aMaterno']) && isset($params['fechaNacimiento']) && isset($params['ciudad']) && isset($params['cp']) && isset($params['colonia']) && isset($params['calle']) && isset($params['numero']) && isset($params['detalle'])/*/*&& isset($params['DIRECCION_idDireccion'])*/){
						//$this->guardarDireccion($params1);

					/*	print_r($params);
						$this->updateCliente($params);
				
					}*/
				}
				
			}
			else{
				
				View::renderErrors(array("No se envio el identificador del producto"));	
			}
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
			
		}



		public function producto_inicio(){
			try{
			$this->view->render(explode("\\",get_class($this))[1], "producto_inicio",$this->getErrores());
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}

		public function guardar_producto($params=array()){
			try{
			$proveedores=$this->model->listarInventarios();
			//$this->view->render(explode("\\",get_class($this))[1], "guardar_producto",$proveedores,$this->getErrores());			
			//$this->guardar($params);
			if(isset($params['nombre']) && isset($params['precioUnitario']) && isset($params['descripcion']) && isset($params['cantidad']) && isset($params['PROVEEDOR_rfc'])) {
				//$this->guardarProducto($params);
				echo "lol";
				print_r($params);
				$this->guardarProducto($params);
				//$proveedores=$this->model->listarInventarios();
				//$this->crearProveedor($params);
				
			}
			$this->view->render(explode("\\",get_class($this))[1], "guardar_producto",$proveedores,$this->getErrores());			
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}

		public function guardarProducto($params){
			try{
			$nombre = $params['nombre'];
		    $precioUnitario = $params['precioUnitario'];
		    $descripcion = $params['descripcion'];
		    $cantidad = $params['cantidad'];
		    $PROVEEDOR_rfc = $params['PROVEEDOR_rfc'];

		    if(count($this->errores) ==0 ){
		    	try{
		        	$this->model->crearInventario($nombre,$precioUnitario,$descripcion,$cantidad,$PROVEEDOR_rfc);
		    	}
		    	catch(\Exception $e){
					$this->errores['global']=$e->getMessage();
				}
		    }
			}
			catch (Exception $e) {
							View::renderErrors(array($e->getMessage()));
						}
		}

		/*public function mostrar_proveedores(){
			$proveedores=$this->model->listarInventarios();
		}*/


	}