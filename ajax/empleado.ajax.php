<?php

require_once "../controladores/empleado.controlador.php";
require_once "../modelos/empleado.modelo.php";

class AjaxEmpleado{

	/*=============================================
	EDITAR Empleado
	=============================================*/	

	public $idEmpleado;

	public function ajaxEditarEmpleado(){

		$item = "id";
		$valor = $this->idEmpleado;

		$respuesta = ControladorEmpleado::ctrMostrarEmpleado($item, $valor);

		echo json_encode($respuesta);


	}
}

/*=============================================
EDITAR Empleado
=============================================*/	

if(isset($_POST["idEmpleado"])){

	$empleado = new AjaxEmpleado();
	$empleado -> idEmpleado = $_POST["idEmpleado"];
	$empleado -> ajaxEditarEmpleado();

}


