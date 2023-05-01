<?php

require_once "../controladores/devolucion.controlador.php";
require_once "../modelos/devolucion.modelo.php";

class AjaxDevolucion{

	/*=============================================
	EDITAR DEVOLUCION
	=============================================*/	

	public $idDevolucion;

	public function ajaxEditarDevolucion(){

		$item = "id";
		$valor = $this->idDevolucion;

		$respuesta = ControladorDevolucion::ctrMostrarDevolucion($item, $valor);

		echo json_encode($respuesta);

	}



}

/*=============================================
EDITAR DEVOLUCIONES
=============================================*/
if(isset($_POST["idDevolucion"])){

	$editar = new AjaxDevolucion();
	$editar -> idDevolucion = $_POST["idDevolucion"];
	$editar -> ajaxEditarDevolucion();

}

