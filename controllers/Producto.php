<?php
	namespace controllers;	
	use libs\Controller;

	class Producto extends Controller{

		public function __construct(){
			parent::__construct();
			
		}

		public function producto_inicio(){

			$this->view->render(explode("\\",get_class($this))[1], "producto_inicio",$this->getErrores());

		}

		public function guardar_producto(){
			$this->view->render(explode("\\",get_class($this))[1], "guardar_producto",$this->getErrores());			
		}


	}