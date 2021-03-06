<?php

namespace libs;
class Validation{
	//Definimos un arreglo para colocar los errores de validacion
	private $errors = array();

	/**
	*Validamos texto con o sin espacios, y la posibilidad de enviar longitud minima y maxima
	*/
	public function validaTexto($text, $min = false, $max=false, $espacios = true, $mensaje=""){
		
		if(is_numeric($min)){
			if(strlen($text) < $min){
				$this->errors[] = $mensaje." es muy corto";
				return false;
			}
		}
		if(is_numeric($max)){
			if(strlen($text) > $max){
				$this->errors[] = $mensaje." es muy largo";
				return false;
			}
		}

		if($espacios){
			$res = ereg("^[A-Za-z0-9\ ]+$", $text);
		}
		else{
			$res = ereg("^[A-Za-z0-9]+$", $text);	
		}

		if($res){
			return true;
		}
		else{
			$this->errors[] = $mensaje." es incorrecto".$text;
			return false;
		}



	}

	//Validacion de direcciones email
	public function validaEmail($email, $dominio='', $mensaje=''){
		$res = ereg("^[^@ ]+@[^@ ]+\.[^@ \.]+$", trim($email));
		if($res){
			return true;
		}
		else{
			$this->errors[] = $mensaje." es incorrecto";
			return false;
		}

	}

	//Validacion de numeros
	public function validaNumeros($num, $min=false, $max=false, $mensaje=''){
		if(is_numeric($num) && is_numeric($min) && is_numeric($max)){
			if($num < $min or $num > $max ){
				$this->errors[] = $mensaje." es muy pequeño";
				return false;
			}
			return true;
		}
		else{
			$this->errors[] = $mensaje." es muy grande";
			return false;
		}
	}

	//Validacion de fechas
	public function validaFecha($fecha, $mensaje=''){
		if(strtotime($fecha) === false){
			$this->errors[] = $mensaje.". El valor del campo es: ".$fecha;
			return false;
		}
		return true;
	}

	public function validaFichero($file, $max_size=false, $ext=array(), $mensaje=''){

	}

	public function getErroresValidacion(){
		return $this->errors;
	}
		
}

?>