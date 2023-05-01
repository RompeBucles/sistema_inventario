<?php

require_once "../controladores/registro-empleados.controlador.php";
require_once "../modelos/registro-empleados.modelo.php";

class AjaxEmpleado{

	/*=============================================
	EDITAR EMPLEADOS
	=============================================*/	

	public $idEmpleado;

	public function ajaxEditarEmpleado(){

		$item = "id";
		$valor = $this->idEmpleado

		$respuesta = ControladorEmpleado::ctrMostrarEmpleado($item, $valor);

		echo json_encode($respuesta);

	}
}

/*=============================================
EDITAR CATEGORÍA
=============================================*/	
if(isset($_POST["idEmpleado"])){

	$empleado = new AjaxEmpleado();
	$empleado -> idEmpleado = $_POST["idEmpleado"];
	$empleado -> ajaxEditarEmpleado();
}
