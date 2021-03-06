<?php
	namespace controllers;	
	use libs\Controller;
	use libs\View;

	class Pedido extends Controller{

		public function __construct(){
			parent::__construct();
			$this->loadModel();
			
		}

		public function pedido_inicio(){
			try{
			$this->view->render(explode("\\",get_class($this))[1], "pedido_inicio",$this->getErrores());
			}
			catch (Exception $e) {
							View::renderErrors(array($e->getMessage()));
						}		
					}

		public function guardar_pedido($params=array()){	
		try{			
			$clientes=$this->model->listarInventarios();
			$productos=$this->model->listarProductos();	
			$productos1=$this->model->listarProductos();
			//print_r($productos);
			//echo "lol";
			//print_r($productos1);
			//print_r($clientes);
			//$this->view->render(explode("\\",get_class($this))[1], "guardar_producto",$proveedores,$this->getErrores());			
			//$this->guardar($params);
			if(isset($params['CLIENTE_dni']) && isset($params['formaPago']) && isset($params['fecha']) && isset($params['estado']) && isset($params['direccionEnvio']) && isset($params['PRODUCTO_codigo']) && isset($params['cantProducto']) ) {
				//$this->guardarProducto($params);
				//echo "lol";
				//print_r($params);
				$this->registrarPedido($params);
				//echo $PEDIDO_idPedido;	
				//echo "yaaa";			
				//$this->guardarProducto($params);
				//$proveedores=$this->model->listarInventarios();
				//$this->crearProveedor($params);
				
			}
			$this->view->render3(explode("\\",get_class($this))[1], "guardar_pedido",$clientes,$productos,$productos1,$this->getErrores());			
		}
		catch (Exception $e) {
						View::renderErrors(array($e->getMessage()));
					}
		}

		public function registrarPedido($params){
			try{
			//echo "registrarPedido";
			$formaPago = $params['formaPago'];
			$fecha = $params['fecha'];
			$estado = $params['estado'];
			$direccionEnvio = $params['direccionEnvio'];
			$CLIENTE_dni = $params['CLIENTE_dni'];

			$PRODUCTO_codigo = $params['PRODUCTO_codigo'];
			$cantProducto = $params['cantProducto'];
			/*echo $formaPago;
			echo $fecha;
			echo $estado;
			echo $direccionEnvio;
			echo $CLIENTE_dni;*/

			if(count($this->errores) ==0 ){
		    	try{
		        	$this->model->registrarPedido($formaPago,$fecha,$estado,$direccionEnvio,$CLIENTE_dni,$PRODUCTO_codigo,$cantProducto);
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

		public function mostrar_pedidos(){
			try {
				$pedidos = $this->model->listarPedidos();
				//$cliente = $this->model->listarPedidos1();
				//$productoPedido = $this->model->listarProductosPedidos();
				$this->view->render(explode("\\",get_class($this))[1], "mostrar_pedidos", $pedidos,$this->getErrores());

			} catch (Exception $e) {
				View::renderErrors(array($e->getMessage()));
			}
		}

		public function modificar_pedido($params=array()){
			try {
				if (count($params)>0) {
					$p = $this->model->getPedidoById($params['identificador']);
					//$pp=$p[0];
					//var_dump($pp[0]);

					if (empty($p)) {
						View::renderErrors(array("No existe el pedido con identificador ".$params['identificador']));
					}else{
						$this->view->render(explode("\\",get_class($this))[1], "modificar_pedido", $p[0], $this->getErrores());
					}
				}
			} catch (Exception $e) {
				View::renderErrors(array("No se envio el identificador del pedido"));	
			}
		}
	}	